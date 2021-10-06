<?php

declare(strict_types=1);

class Article
{
	private Nette\Database\Connection $db;

	public function __construct(Nette\Database\Connection $db)
	{
		$this->db = $db;
	}

	public function save(): void
	{
		$this->db->query('INSERT INTO articles', [
			'title' => $this->title,
			'content' => $this->content,
		]);
	}
}
