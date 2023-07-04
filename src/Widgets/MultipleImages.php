<?php

namespace TCG\Voyager\Widgets;

class MultipleImages extends BaseDimmer
{
    /**
     * The widget's unique name.
     *
     * @var string
     */
    protected $name = 'multiple_images';

    /**
     * The widget's display name.
     *
     * @var string
     */
    protected $displayName = 'Multiple Images';

    /**
     * The widget's icon class.
     *
     * @var string
     */
    protected $icon = 'voyager-images';

    /**
     * The widget's Voyager BREAD name.
     *
     * @var string
     */
    protected $breadName = 'settings';

    /**
     * Get the widget's unique name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the widget's display name.
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * Get the widget's icon class.
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Get the widget's Voyager BREAD name.
     *
     * @return string
     */
    public function getBreadName()
    {
        return $this->breadName;
    }

    /**
     * Renders the widget.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function render()
    {
        return view('voyager::dimmer', array_merge($this->config, [
            'icon' => $this->icon,
        ]));
    }
}
