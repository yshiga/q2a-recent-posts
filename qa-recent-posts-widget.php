<?php

class qa_recent_posts_widget {

	function allow_template($template)
	{
		return true;
	}

	function allow_region($region)
	{
		return true;
	}

	function output_widget($region, $place, $themeobject, $template, $request, $qa_content)
	{
    $template = file_get_contents(RCP_DIR . '/html/widget.html');

    // 24時間以内の質問数、回答数、コメント数(質問、回答に投稿されたもの)、飼育日誌数
    $params = array(
      '^question_count' => '3',
      '^answer_count' => '5',
      '^comment_count' => '10',
      '^blog_count' => '20'
    );
    $html = strtr($template, $params);
		$themeobject->output($html);
  }
} // end class
/*
	Omit PHP closing tag to help avoid accidental output
*/
