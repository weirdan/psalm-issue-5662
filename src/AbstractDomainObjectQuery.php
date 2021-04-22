<?php

namespace NS;

/* AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA AAAAAAAAAAAAAAAAAAAAAAAAAAA */

/**
 * @template TParent of AbstractDomainObjectQuery
 */
abstract class AbstractDomainObjectQuery {
    protected $a;

    public function __construct(AbstractDomainObjectQuery $_p) {}
}
