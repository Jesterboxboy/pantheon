<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/hugin.proto

namespace GPBMetadata\Proto;

class Hugin
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
proto/hugin.protocommon"
GetLastDayPayload"5
GetLastDayResponse
data (2.common.HuginData"
GetLastMonthPayload"7
GetLastMonthResponse
data (2.common.HuginData"
GetLastYearPayload"6
GetLastYearResponse
data (2.common.HuginData"�
	HuginData
datetime (	
event_count (

uniq_count (
site_id (	
country (	
city (	
browser (	

os (	
device	 (	
screen
 (	
language (	

event_type (	
hostname
HuginC

GetLastDay.common.GetLastDayPayload.common.GetLastDayResponseI
GetLastMonth.common.GetLastMonthPayload.common.GetLastMonthResponseF
GetLastYear.common.GetLastYearPayload.common.GetLastYearResponsebproto3'
        , true);

        static::$is_initialized = true;
    }
}
