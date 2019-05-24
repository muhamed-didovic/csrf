<?php

namespace MuhamedDidovic\Tests;

use Illuminate\Http\Request;
use Orchestra\Testbench\TestCase;
use Illuminate\Encryption\Encrypter;

class VerifyCsrfTokenExceptTest extends TestCase
{
    private $stub;
    private $request;
    
    protected function setUp()
    {
        parent::setUp();
        
        $this->stub = new VerifyCsrfTokenExceptStub(app(), new Encrypter(self::generateKey('AES-128-CBC')));
        $this->request = Request::create('http://example.com/foo/bar', 'POST');
    }
    
    /**
     * Create a new encryption key for the given cipher.
     *
     * @param  string  $cipher
     * @return string
     */
    public static function generateKey($cipher)
    {
        return random_bytes($cipher === 'AES-128-CBC' ? 16 : 32);
    }
    
    public function testItCanExceptPaths()
    {
        $this->assertMatchingExcept(['/foo/bar']);
        $this->assertMatchingExcept(['foo/bar']);
        $this->assertNonMatchingExcept(['/bar/foo']);
    }
    
    public function testItCanExceptWildcardPaths()
    {
        $this->assertMatchingExcept(['/foo/*']);
        $this->assertNonMatchingExcept(['/bar*']);
    }
    
    public function testItCanExceptFullUrlPaths()
    {
        $this->assertMatchingExcept(['http://example.com/foo/bar']);
        $this->assertMatchingExcept(['http://example.com/foo/bar/']);
        
        $this->assertNonMatchingExcept(['https://example.com/foo/bar/']);
        $this->assertNonMatchingExcept(['http://foobar.com/']);
    }
    
    public function testItCanExceptFullUrlWildcardPaths()
    {
        $this->assertMatchingExcept(['http://example.com/*']);
        $this->assertMatchingExcept(['*example.com*']);
        
        $this->request = Request::create('https://example.com', 'POST');
        $this->assertMatchingExcept(['*example.com']);
    }
    
    private function assertMatchingExcept(array $except, $bool = true)
    {
        $this->assertSame($bool, $this->stub->setExcept($except)->checkInExceptArray($this->request));
    }
    
    private function assertNonMatchingExcept(array $except)
    {
        return $this->assertMatchingExcept($except, false);
    }
}
