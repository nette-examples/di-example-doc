<?php

declare(strict_types=1);

class UserController extends Controller
{
	private ArticleFactory $articleFactory;

	public function __construct(ArticleFactory $articleFactory)
	{
		$this->articleFactory = $articleFactory;
	}

	public function formSubmitted($values)
	{
		$article = $this->articleFactory->create();
		$article->title = $values->title;
		$article->content = $values->content;
		$article->save();
	}
}
