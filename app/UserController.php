<?php

declare(strict_types=1);

class UserController extends Controller
{
	private ArticleFactory $articleFactory;

	public function __construct(ArticleFactory $articleFactory)
	{
		$this->articleFactory = $articleFactory;
	}

	public function formSubmitted($data)
	{
		$article = $this->articleFactory->create();
		$article->title = $data->title;
		$article->content = $data->content;
		$article->save();
	}
}
