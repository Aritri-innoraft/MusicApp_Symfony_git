<?php 
namespace App\Services;

use Respect\Validation\Validator as v;

/**
 * This class is used to validate all form fields in the upload form.
 */
class UploadValidation 
{

   /**
   *  @var string $title
   *    Stores title entered by user.
   */
  private $title;
  /**
   *  @var string $singer
   *    Stores singer entered by user.
   */
  private $singer;
  /**
   *  @var string $audioFile
   *    Stores audioFile entered by user.
   */
  private $audioFile;
  /**
   *  @var string $genre
   *    Stores genre entered by user.
   */
  private $genre;
  /**
   *  @var string $imgFile
   *    Stores imgFile entered by user.
   */
  private $imgFile;

  /**
   * Constructor to initialise global variables.
   * 
   *  @param string $title
   *    Stores title entered by user.
   *  @param string $singer
   *    Stores singer entered by user.
   *  @param string $audio
   *    Stores path of audio file entered by user.
   *  @param array genre
   *    Stores genre entered by user.
   *  @param string $img
   *    Stores path of image file entered by user.
   */
  public function __construct(string $title , string $singer, string $audio, array $genre, string $img) {
    $this->title = $title;
    $this->singer = $singer;
    $this->audioFile = $audio;
    $this->genre = $genre;
    $this->imgFile = $img;
  }

   /**
   * Function to validate form data of upload form.
   * 
   *  @return string
   *    Returns message according to validation error.
   */
  public function validateData() {
    if (!v::notEmpty()->validate($this->title)) {
      return "Please set a title";
    }
    if (!v::notEmpty()->validate($this->singer)) {
      return "Please set a singer";
    }
    if (!v::notEmpty()->validate($this->audioFile)) {
      return "Please upload the audio";
    }
    if (!v::notEmpty()->validate($this->genre)) {
      return "Please select a genre";
    }
    if (!v::notEmpty()->validate($this->imgFile)) {
      return "Please upload a cover image";
    }
    return "";
  }
}
