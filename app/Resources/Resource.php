<?php

namespace App\Resources;

class Resource
{
  public $object = [];
  public function __construct($object)
  {
    return $this->object = [
      // 'id' => $object->id,
    ];
  }

  public static function collection($objects)
  {
    $array['objects'] = [];
    foreach ($objects as $object) {
      $array['objects'][] = [
        // 'id' => $object->id,
      ];
    }

    return $array;
  }
}
