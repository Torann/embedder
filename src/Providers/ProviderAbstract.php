<?php
namespace Torann\Embedder\Providers;

use Torann\Embedder\Url;

abstract class ProviderAbstract
{
    /**
     * Instance of Url
     *
     * @var \Torann\Embedder\Url
     */
    protected $url;

    /**
     * Constructs new Provider instance.
     *
     * @param string $url
     */
    public function __construct($url)
    {
        $this->url = new Url($url);
        $this->normalizeUrl();
    }

    /**
     * Normalizes a url.
     *
     * @return void
     */
    protected function normalizeUrl()
    {
        //
    }

    /**
     * Get embed url for provider.
     *
     * @return array
     */
    abstract public function getUrl();

    /**
     * Validates that the url belongs to this service.
     *
     * @return bool|int
     */
    abstract public function validateUrl();
}
