<?php

declare(strict_types=1);

namespace Yin32167\HelloWorld\Tests;

use PHPUnit\Framework\TestCase;
use Yin32167\HelloWorld\Student;

final class StudentTest extends TestCase 
{

    public function testCannotBeShow(): void
    {
        $student = new Student;
        
        $this->assertEquals(
            'Hi I\'m magina, how are you?',
            $student->show()
        );
    }

}