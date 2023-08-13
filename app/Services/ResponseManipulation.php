<?php

namespace App\Services;

use Illuminate\Http\Response;

class ResponseManipulation
{
  private $content;
  private $response;
  private $position;

  public function __construct($tag = '</head>', $content = '', Response $response)
  {
    $this->content = $content;
    $this->response = $response;
    $this->position = strripos($this->response->getContent(), $tag);
  }

  /**
   * Return the ready response
   *
   * @return response
   */
  public function getResponse()
  {
    // Skip if the tag not found
    if (!$this->position) {
      return $this->response;
    }

    // Prepare the content
    if (is_array($this->content)) {
      $content = '';
      foreach ($this->content as $temp) {
        $content .= $temp;
      }
    } else {
      $content = $this->content;
    }

    $response_content = $this->response->getContent();

    // Push the content into the request reponse
    $content = ''
      . substr($response_content, 0, $this->position)
      . $content
      . substr($response_content, $this->position);

    return $this->response->setContent($content);
  }
}
