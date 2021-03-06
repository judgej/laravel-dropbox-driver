<?php

namespace BC\Laravel\DropboxDriver\Tests;

use Storage;

class DropboxDriverTest extends TestCase
{
    /** @test */
    public function it_creates_and_removes_a_folder()
    {
        $this->assertNotNull(Storage::disk('dropbox')->directories('/'));
    }
}
