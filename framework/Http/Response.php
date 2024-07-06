<?php
namespace Teacherportal\Framework\Http;

class Response
{
    public function __construct(
        private string $content = '',
        private int $status = 200,
        private array $headers = []
    )
    {
        $this->headers[] = 'Content-Type: text/html; charset=utf-8';
    }

    public function send(): void
    {
        //echo $this->content;
        http_response_code($this->status);
        foreach ($this->headers as $header) {
            header($header);
        }
        echo $this->content;
    }

}