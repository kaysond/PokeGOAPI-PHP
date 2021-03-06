<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Enums/ItemEffect.php');

namespace POGOProtos\Enums {

  use ProtobufEnum;

  // enum POGOProtos.Enums.ItemEffect
  abstract class ItemEffect extends ProtobufEnum {
    const ITEM_EFFECT_NONE = 0;
    const ITEM_EFFECT_CAP_NO_FLEE = 1000;
    const ITEM_EFFECT_CAP_NO_MOVEMENT = 1002;
    const ITEM_EFFECT_CAP_NO_THREAT = 1003;
    const ITEM_EFFECT_CAP_TARGET_MAX = 1004;
    const ITEM_EFFECT_CAP_TARGET_SLOW = 1005;
    const ITEM_EFFECT_CAP_CHANCE_NIGHT = 1006;
    const ITEM_EFFECT_CAP_CHANCE_TRAINER = 1007;
    const ITEM_EFFECT_CAP_CHANCE_FIRST_THROW = 1008;
    const ITEM_EFFECT_CAP_CHANCE_LEGEND = 1009;
    const ITEM_EFFECT_CAP_CHANCE_HEAVY = 1010;
    const ITEM_EFFECT_CAP_CHANCE_REPEAT = 1011;
    const ITEM_EFFECT_CAP_CHANCE_MULTI_THROW = 1012;
    const ITEM_EFFECT_CAP_CHANCE_ALWAYS = 1013;
    const ITEM_EFFECT_CAP_CHANCE_SINGLE_THROW = 1014;

    public static $_values = array(
      0 => "ITEM_EFFECT_NONE",
      1000 => "ITEM_EFFECT_CAP_NO_FLEE",
      1002 => "ITEM_EFFECT_CAP_NO_MOVEMENT",
      1003 => "ITEM_EFFECT_CAP_NO_THREAT",
      1004 => "ITEM_EFFECT_CAP_TARGET_MAX",
      1005 => "ITEM_EFFECT_CAP_TARGET_SLOW",
      1006 => "ITEM_EFFECT_CAP_CHANCE_NIGHT",
      1007 => "ITEM_EFFECT_CAP_CHANCE_TRAINER",
      1008 => "ITEM_EFFECT_CAP_CHANCE_FIRST_THROW",
      1009 => "ITEM_EFFECT_CAP_CHANCE_LEGEND",
      1010 => "ITEM_EFFECT_CAP_CHANCE_HEAVY",
      1011 => "ITEM_EFFECT_CAP_CHANCE_REPEAT",
      1012 => "ITEM_EFFECT_CAP_CHANCE_MULTI_THROW",
      1013 => "ITEM_EFFECT_CAP_CHANCE_ALWAYS",
      1014 => "ITEM_EFFECT_CAP_CHANCE_SINGLE_THROW",
    );

    public static function isValid($value) {
      return array_key_exists($value, self::$_values);
    }

    public static function toString($value) {
      checkArgument(is_int($value), 'value must be a integer');
      if (array_key_exists($value, self::$_values))
        return self::$_values[$value];
      return 'UNKNOWN';
    }
  }

}