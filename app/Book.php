<?php

namespace App;

use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

use Illuminate\Database\Eloquent\Model;

class Book extends Model implements StaplerableInterface
{
    // Stapler の読み込み
    use EloquentTrait;


    // mysql に埋め込む値を選ぶ
    // view 側のinput[name] に対応する値をfillable に設定する。
    protected $fillable = array ('user_id', 'title', 'intro', 'created', 'pic');

    public function __construct(array $attributes = array()) {

		//画像の投稿設定
		$this->hasAttachedFile('pic', [

	 //      //画像の切り取るサイズのパターン
	 //      'styles' => [
	 //        'large' => '640x480#',
	 //        'medium' => '300x200#',
	 //        'thumb' => '100x75#'
	 //      ],

	      //格納ディレクトリ(public配下からのパス)
	      // 'url' => '/uploads/books/:id/:style/:filename'
	      'url' => '/uploads/books/:id/:filename'

	      ]);
		parent::__construct($attributes);
    }
}
