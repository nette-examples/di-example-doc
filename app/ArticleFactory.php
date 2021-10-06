<?php

declare(strict_types=1);

/*
class ArticleFactory
{
	private Nette\Database\Connection $db;

	public function __construct(Nette\Database\Connection $db)
	{
		$this->db = $db;
	}

	public function create(): Article
	{
		return new Article($this->db);
	}
}
*/
interface ArticleFactory
{
	function create(): Article;
}
