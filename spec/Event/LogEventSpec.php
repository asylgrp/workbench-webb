<?php

declare(strict_types = 1);

namespace spec\workbench\webb\Event;

use workbench\webb\Event\LogEvent;
use Psr\Log\LogLevel;
use PhpSpec\ObjectBehavior;

class LogEventSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(LogEvent::class);
    }

    function it_contains_a_message()
    {
        $this->beConstructedWith('message');
        $this->getMessage()->shouldBeLike('message');
    }

    function it_contains_a_context()
    {
        $this->beConstructedWith('', ['key' => 'value']);
        $this->getContext()->shouldBeLike(['key' => 'value']);
    }

    function it_contains_a_severity()
    {
        $this->beConstructedWith('', [], LogLevel::DEBUG);
        $this->getSeverity()->shouldReturn(LogLevel::DEBUG);
    }

    function it_throws_on_invalid_severity()
    {
        $this->beConstructedWith('', [], 'not-a-valid-severity');
        $this->shouldThrow(\LogicException::class)->duringInstantiation();
    }
}
