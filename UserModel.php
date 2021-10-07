<?php 

namespace istiaqhossain\phpmvc;

use istiaqhossain\phpmvc\db\DbModel;

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}
