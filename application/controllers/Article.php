<?php

class Article extends CI_Controller
{
    public function index()
    {
        $data['articles'] = [
            [
                'title' => 'First Article',
                'content' => 'This is the content of the first article.'
            ],
            [
                'title' => 'Second Article',
                'content' => 'This is the content of the second article.'
            ]
        ];

        if (count($data['articles']) > 0) {
            $this->load->view('articles/list_article.php', $data);
        } else {
            $this->load->view('articles/empty_article.php');
        }
    }

    public function show($slug = null)
    {
        $this->load->view('articles/show_article.php');
    }
}
