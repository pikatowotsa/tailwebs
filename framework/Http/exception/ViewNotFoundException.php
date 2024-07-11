<?php
namespace Teacherportal\Framework\Http\Exception;

class ViewNotFoundException extends \Exception
{
    protected $message = "View not found";
}