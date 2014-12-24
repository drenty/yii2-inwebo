<?php

namespace drenty\inwebo;

class RefusedAuthenticationException extends \drenty\inwebo\Exception
{
    /**
     * @return string the user-friendly name of this exception
     */
    public function getName()
    {
        return 'Inwebo Refused Authentication';
    }
}
