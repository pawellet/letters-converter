<?php

declare(strict_types=1);

namespace App\Request;


class Request
{
    private array $get = [];
    private array $post = [];
    private string $method = 'get';

    public function __construct(array $get, array $post, string $method)
    {
        $this->get = $get;
        $this->post = $post;
        $this->method = $method;
    }
    public function getParam(): ?array
    {
        return $this->get;
    }
}
