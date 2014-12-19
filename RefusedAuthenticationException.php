<?php

namespace drenty\inwebo;

class InweboRefusedAuthenticationException extends Exception
{
    /**
     * @return string the user-friendly name of this exception
     */
    public function getName()
    {
        return 'Inwebo Refused Authentication';
    }
}
