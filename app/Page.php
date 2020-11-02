<?php

namespace App;

use Illuminate\Support\HtmlString;

class Page extends Data
{
    protected $filename;

    public function __construct(array $data, $filename)
    {
        parent::__construct($data);
        $this->filename = $filename;
    }

    public function filename()
    {
        return $this->filename;
    }

    public function template()
    {
        return view()->exists($this->get('type'))
            ? $this->get('type')
            : 'default';
    }

    public function isType($type)
    {
        return $this->get('type', 'default') === $type;
    }

    public function hero()
    {
        return $this->toComponent($this->get('meta.hero'), []);
    }

    public function theme()
    {
        return new Theme($this->get('theme'));
    }

    public function attributes($key = [], $options = [])
    {
        if (! is_array($key)) {
            $key = [$key];
        }

        $attributes = new Attributes($this, $key);

        foreach ($options as $key => $value) {
            $attributes->add($key, $value);
        }

        return new HtmlString((string) $attributes);
    }
}
