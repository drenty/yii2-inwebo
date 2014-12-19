<?php

namespace drenty\inwebo;

class InweboNoResultException extends Exception
{
    /**
     * @return string the user-friendly name of this exception
     */
    public function getName()
    {
        return 'Inwebo No Result';
    }
}