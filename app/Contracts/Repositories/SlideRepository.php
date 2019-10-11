<?php
namespace App\Contracts\Repositories;

use App\Models\Slide;
use App\Models\Product;
use App\Contracts\Interfaces\SlideInterface;

class SlideRepository implements SlideInterface
{
	public function __construct(Slide $slide)
	{
		$this->slide = $slide ;
	}

	public function getAll()
	{
		return $this->slide->all();
	}
}
