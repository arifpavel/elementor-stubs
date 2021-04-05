<?php
use StubsGenerator\Finder;

return Finder::create()
    ->in('elementor')
    ->path('includes')
    ->sortByName();
