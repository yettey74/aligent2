<?php
/**
 * This Testunit will check each object variable
 * If the test returns a 0 then we have either an error 
 * or an actual result where 2 dates are < 1 day
 * nil error chack on OBJECT or CONST
 */

require 'thyme.class.php';

$pass = 0;
$fail = 0;
$errors = array();

############################################
## Test harness to check date object 1    ##
############################################

$dateobject1a = new thyme( '9999/12/31', '2021/1/2', 0, 0, 1, 0 ); // Upper limit
if( $dateobject1a->_apiObject( $dateobject1a->getTimeType(), $dateobject1a->getDateType() ) == 2914266 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dateobject1a', 2914266, $dateobject1a->_apiObject( $dateobject1a->getTimeType(), $dateobject1a->getDateType() ) ] );
}

$dateobject1b = new thyme( '0001/1/1', '2021/1/2', 0, 0, 1, 0 ); // Lower limit
if( $dateobject1b->_apiObject( $dateobject1b->getTimeType(), $dateobject1b->getDateType() ) == 737790 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dateobject1b', 737790, $dateobject1b->_apiObject( $dateobject1b->getTimeType(), $dateobject1b->getDateType() ) ] );
}

$dateobject1c = new thyme( '-1/-1/-1', '2021/1/2', 0, 0, 1, 0 ); // OOB
if( $dateobject1c->_apiObject( $dateobject1c->getTimeType(), $dateobject1c->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dateobject1c', 0, $dateobject1c->_apiObject( $dateobject1c->getTimeType(), $dateobject1c->getDateType() ) ] );
}

$dateobject1d = new thyme( '99999/13/32', '2021/1/2', 0, 0, 1, 0 ); // OOB
if( $dateobject1d->_apiObject( $dateobject1d->getTimeType(), $dateobject1d->getDateType() ) == 4271 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dateobject1d', 4271, $dateobject1d->_apiObject( $dateobject1d->getTimeType(), $dateobject1d->getDateType() ) ] );
}

$dateobject1e = new thyme( '2021/1/1', '2021/1/2', 0, 0, 1, 0 ); // In Range
if( $dateobject1e->_apiObject( $dateobject1e->getTimeType(), $dateobject1e->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dateobject1e', 0, $dateobject1e->_apiObject( $dateobject1e->getTimeType(), $dateobject1e->getDateType() ) ] );
}

$dateobject1f = new thyme( 'a', '2021/1/2', 0, 0, 1, 0 ); // Is string and not date
if( $dateobject1f->_apiObject( $dateobject1f->getTimeType(), $dateobject1f->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dateobject1f', 0, $dateobject1f->_apiObject( $dateobject1f->getTimeType(), $dateobject1f->getDateType() ) ] );
} 

$dateobject1g = new thyme(  NULL , '2021/1/2' , 0, 0, 1, 0 ); // Is Null
if( $dateobject1g->_apiObject( $dateobject1g->getTimeType(), $dateobject1g->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dateobject1g', 0, $dateobject1g->_apiObject( $dateobject1g->getTimeType(), $dateobject1g->getDateType() ) ] );
}
 
$dateobject1h = new thyme( ' ', '2021/1/2', 0, 0, 1, 0 ); // Is space
if( $dateobject1h->_apiObject( $dateobject1h->getTimeType(), $dateobject1h->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dateobject1h', 0, $dateobject1h->_apiObject( $dateobject1h->getTimeType(), $dateobject1h->getDateType() ) ] );
} 


$dateobject1i = new thyme( '', '2021/1/2', 0, 0, 1, 0 ); // Is empty
if( $dateobject1i->_apiObject( $dateobject1i->getTimeType(), $dateobject1i->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dateobject1i', 0, $dateobject1i->_apiObject( $dateobject1i->getTimeType(), $dateobject1i->getDateType() ) ] );
}

$dateobject1k = new thyme( ' ', '2021/1/2', 0, 0, 1, 0 ); // Is space
if( $dateobject1k->_apiObject( $dateobject1k->getTimeType(), $dateobject1k->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dateobject1k', 0, $dateobject1k->_apiObject( $dateobject1k->getTimeType(), $dateobject1k->getDateType() ) ] );
}

$dateobject1l = new thyme( NULL, '2021/1/2', 0, 0, 1, 0 ); // Is Null
if( $dateobject1l->_apiObject( $dateobject1l->getTimeType(), $dateobject1l->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dateobject1l', 0, $dateobject1l->_apiObject( $dateobject1l->getTimeType(), $dateobject1l->getDateType() ) ] );
}

$dateobject1m = new thyme( 'a', '2021/1/2', 0, 0, 1, 0 ); // In Nan
if( $dateobject1m->_apiObject( $dateobject1m->getTimeType(), $dateobject1m->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dateobject1m', 0, $dateobject1m->_apiObject( $dateobject1m->getTimeType(), $dateobject1m->getDateType() ) ] );
}

$dateobject1n = new thyme( '2021/1/1', '2021/1/2', 0, 0, 1, 0 ); // In Range
if( $dateobject1n->_apiObject( $dateobject1n->getTimeType(), $dateobject1n->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dateobject1n', 0, $dateobject1n->_apiObject( $dateobject1n->getTimeType(), $dateobject1n->getDateType() ) ] );
}

$dateobject1o = new thyme( '99999/13/32', '2021/1/2', 0, 0, 1, 0 ); // OOB reverts to 9999/12/31
if( $dateobject1o->_apiObject( $dateobject1o->getTimeType(), $dateobject1o->getDateType() ) == 4271 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dateobject1o', 4271, $dateobject1o->_apiObject( $dateobject1o->getTimeType(), $dateobject1o->getDateType() ) ] );
}

$dateobject1p = new thyme( '-1/-1/-1', '2021/1/2', 0, 0, 1, 0 ); // OOB
if( $dateobject1p->_apiObject( $dateobject1p->getTimeType(), $dateobject1p->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dateobject1p', 0, $dateobject1p->_apiObject( $dateobject1p->getTimeType(), $dateobject1p->getDateType() ) ] );
}

$dateobject1q = new thyme( '0001/1/1', '2021/1/2', 0, 0, 1, 0 ); // Lower limit
if( $dateobject1q->_apiObject( $dateobject1q->getTimeType(), $dateobject1q->getDateType() ) == 737790 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dateobject1q', 737790, $dateobject1q->_apiObject( $dateobject1q->getTimeType(), $dateobject1q->getDateType() ) ] );
}

$dateobject1r = new thyme( '9999/12/31', '2021/1/2', 0, 0, 1, 0 ); // Upper limit
if( $dateobject1r->_apiObject( $dateobject1r->getTimeType(), $dateobject1r->getDateType() ) == 2914266 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dateobject1r', 2914266, $dateobject1r->_apiObject( $dateobject1r->getTimeType(), $dateobject1r->getDateType() ) ] );
}
 
$dateobject1s = new thyme( [], '2021/1/2', 0, 0, 1, 0 ); // Is Array
if( $dateobject1s->_apiObject( $dateobject1s->getTimeType(), $dateobject1s->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dateobject1s', 0, $dateobject1s->_apiObject( $dateobject1s->getTimeType(), $dateobject1s->getDateType() ) ] );
}

$dateobject1t = new thyme( NAN, '2021/1/2', 0, 0, 1, 0 ); // Is Array
if( $dateobject1t->_apiObject( $dateobject1t->getTimeType(), $dateobject1t->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dateobject1t', 0, $dateobject1t->_apiObject( $dateobject1t->getTimeType(), $dateobject1t->getDateType() ) ] );
}

############################################
## Test harness to check date object 2    ##
############################################

$dateobject2a = new thyme( '2021/1/1', '9999/12/31', 0, 0, 1, 0 ); // limit
if( $dateobject2a->_apiObject( $dateobject2a->getTimeType(), $dateobject2a->getDateType() ) == 2914267 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dateobject2a', 2914267, $dateobject2a->_apiObject( $dateobject2a->getTimeType(), $dateobject2a->getDateType() ) ] );
}

$dateobject2b = new thyme( '2021/1/1', '0001/1/1', 0, 0, 1, 0 ); // limit
if( $dateobject2b->_apiObject( $dateobject2b->getTimeType(), $dateobject2b->getDateType() ) == 737789 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dateobject2b', 737789, $dateobject2b->_apiObject( $dateobject2b->getTimeType(), $dateobject2b->getDateType() ) ] );
}

$dateobject2c = new thyme( '2021/1/1', '-1/-1/-1', 0, 0, 1, 0 ); // OOB
if( $dateobject2c->_apiObject( $dateobject2c->getTimeType(), $dateobject2c->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dateobject2c', 0, $dateobject2c->_apiObject( $dateobject2c->getTimeType(), $dateobject2c->getDateType() ) ] );
}

$dateobject2d = new thyme( '2021/1/1', '99999/13/32', 0, 0, 1, 0 ); // OOB
if( $dateobject2d->_apiObject( $dateobject2d->getTimeType(), $dateobject2d->getDateType() ) == 4272 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dateobject2d', 4272, $dateobject2d->_apiObject( $dateobject2d->getTimeType(), $dateobject2d->getDateType() ) ] );
}

$dateobject2e = new thyme( '2021/1/1', '2021/1/1', 0, 0, 1, 0 ); // In Range
if( $dateobject2e->_apiObject( $dateobject2e->getTimeType(), $dateobject2e->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dateobject2e', 0, $dateobject2e->_apiObject( $dateobject2e->getTimeType(), $dateobject2e->getDateType() ) ] );
}
 
$dateobject2f = new thyme( '2021/1/1',  'a' , 0, 0, 1, 0 ); // Is Nan
if( $dateobject2f->_apiObject( $dateobject2f->getTimeType(), $dateobject2f->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dateobject2f', 0, $dateobject2f->_apiObject( $dateobject2f->getTimeType(), $dateobject2f->getDateType() ) ] );
} 

$dateobject2g = new thyme( '2021/1/1',  NULL , 0, 0, 1, 0 ); // Is Null
if( $dateobject2g->_apiObject( $dateobject2g->getTimeType(), $dateobject2g->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dateobject2g', 0, $dateobject2g->_apiObject( $dateobject2g->getTimeType(), $dateobject2g->getDateType() ) ] );
}

$dateobject2h = new thyme( '2021/1/1', ' ', 0, 0, 1, 0 ); // Is space
if( $dateobject2h->_apiObject( $dateobject2h->getTimeType(), $dateobject2h->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dateobject2h', 0, $dateobject2h->_apiObject( $dateobject2h->getTimeType(), $dateobject2h->getDateType() ) ] );
}

$dateobject2i = new thyme( '2021/1/1', '', 0, 0, 1, 0 ); // Is empty
if( $dateobject2i->_apiObject( $dateobject2i->getTimeType(), $dateobject2i->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dateobject2i', 0, $dateobject2i->_apiObject( $dateobject2i->getTimeType(), $dateobject2i->getDateType() ) ] );
}

$dateobject2j = new thyme( '2021/1/1', '9999/12/31', 0, 0, 1, 0 ); // limit
if( $dateobject2j->_apiObject( $dateobject2j->getTimeType(), $dateobject2j->getDateType() ) == 2914267 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dateobject2j', 2914267, $dateobject2j->_apiObject( $dateobject2j->getTimeType(), $dateobject2j->getDateType() ) ] );
}

$dateobject2k = new thyme( '2021/1/1', '0001/1/1', 0, 0, 1, 0 ); // limit
if( $dateobject2k->_apiObject( $dateobject2k->getTimeType(), $dateobject2k->getDateType() ) == 737789 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dateobject2k', 737789, $dateobject2k->_apiObject( $dateobject2k->getTimeType(), $dateobject2k->getDateType() ) ] );
}

$dateobject2l = new thyme( '2021/1/1', '-1/-1/-1', 0, 0, 1, 0 ); // OOB
if( $dateobject2l->_apiObject( $dateobject2l->getTimeType(), $dateobject2l->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dateobject2l', 0, $dateobject2l->_apiObject( $dateobject2l->getTimeType(), $dateobject2l->getDateType() ) ] );
}

$dateobject2m = new thyme( '2021/1/1', '99999/13/32', 0, 0, 1, 0 ); // OOB
if( $dateobject2m->_apiObject( $dateobject2m->getTimeType(), $dateobject2m->getDateType() ) == 4272 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dateobject2m', 4272, $dateobject2m->_apiObject( $dateobject2m->getTimeType(), $dateobject2m->getDateType() ) ] );
}

$dateobject2n = new thyme( '2021/1/1', '2021/1/1', 0, 0, 1, 0 ); // In Range
if( $dateobject2n->_apiObject( $dateobject2n->getTimeType(), $dateobject2n->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dateobject2n', 0, $dateobject2n->_apiObject( $dateobject2n->getTimeType(), $dateobject2n->getDateType() ) ] );
}

$dateobject2o = new thyme( '2021/1/1', 'a', 0, 0, 1, 0 ); // Is Nan
if( $dateobject2o->_apiObject( $dateobject2o->getTimeType(), $dateobject2o->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dateobject2o', 0, $dateobject2o->_apiObject( $dateobject2o->getTimeType(), $dateobject2o->getDateType() ) ] );
}

$dateobject2p = new thyme( '2021/1/1', NULL, 0, 0, 1, 0 ); // Is Null
if( $dateobject2p->_apiObject( $dateobject2p->getTimeType(), $dateobject2p->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dateobject2p', 0, $dateobject2p->_apiObject( $dateobject2p->getTimeType(), $dateobject2p->getDateType() ) ] );
} 

$dateobject2q = new thyme( '2021/1/1', ' ', 0, 0, 1, 0 ); // Is space
if( $dateobject2q->_apiObject( $dateobject2q->getTimeType(), $dateobject2q->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dateobject2q', 0, $dateobject2q->_apiObject( $dateobject2q->getTimeType(), $dateobject2q->getDateType() ) ] );
}

$dateobject2r = new thyme( '2021/1/1', '', 0, 0, 1, 0 ); // Is empty
if( $dateobject2r->_apiObject( $dateobject2r->getTimeType(), $dateobject2r->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dateobject2r', 0, $dateobject2r->_apiObject( $dateobject2r->getTimeType(), $dateobject2r->getDateType() ) ] );
}

$dateobject2s = new thyme( '2021/1/2', [], 0, 0, 1, 0 ); // Is Array
if( $dateobject2s->_apiObject( $dateobject2s->getTimeType(), $dateobject2s->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dateobject2s', 0, $dateobject2s->_apiObject( $dateobject2s->getTimeType(), $dateobject2s->getDateType() ) ] );
}

$dateobject2t = new thyme( '2021/1/2', NAN, 0, 0, 1, 0 ); // Is NAN
if( $dateobject2t->_apiObject( $dateobject2t->getTimeType(), $dateobject2t->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dateobject2t', 0, $dateobject2t->_apiObject( $dateobject2t->getTimeType(), $dateobject2t->getDateType() ) ] );
}

#############################################
## Test harness to check timezone object 1 ##
#############################################

$tz1a = new thyme( '2021/1/1', '2021/1/2', -12, 0, 3, 0 ); // limit
if( $tz1a->_apiObject( $tz1a->getTimeType(), $tz1a->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['tz1a', 0, $tz1a->_apiObject( $tz1a->getTimeType(), $tz1a->getDateType() ) ] );
}

$tz1b = new thyme( '2021/1/1', '2021/1/2', 13, 0, 3, 0 ); // limit
if( $tz1b->_apiObject( $tz1b->getTimeType(), $tz1b->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['tz1b', 0, $tz1b->_apiObject( $tz1b->getTimeType(), $tz1b->getDateType() ) ] );
}

$tz1c = new thyme( '2021/1/1', '2021/1/2', -13, 0, 3, 0 ); // OOB
if( $tz1c->_apiObject( $tz1c->getTimeType(), $tz1c->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['tz1c', 0, $tz1c->_apiObject( $tz1c->getTimeType(), $tz1c->getDateType() ) ] );
}

$tz1d = new thyme( '2021/1/1', '2021/1/2', 14, 0, 3, 0 ); // OOB
if( $tz1d->_apiObject( $tz1d->getTimeType(), $tz1d->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['tz1d', 0, $tz1d->_apiObject( $tz1d->getTimeType(), $tz1d->getDateType() ) ] );
}

$tz1e = new thyme( '2021/1/1', '2021/1/2', 1, 0, 3, 0 ); // In Range
if( $tz1e->_apiObject( $tz1e->getTimeType(), $tz1e->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['tz1e', 0, $tz1e->_apiObject( $tz1e->getTimeType(), $tz1e->getDateType() ) ] );
}

$tz1f = new thyme( '2021/1/1', '2021/1/2', 'a', 0, 3, 0 ); // Is Nan
if( $tz1f->_apiObject( $tz1f->getTimeType(), $tz1f->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['tz1f', 0, $tz1f->_apiObject( $tz1f->getTimeType(), $tz1f->getDateType() ) ] );
}

$tz1g = new thyme( '2021/1/1', '2021/1/2', NULL, 0, 3, 0 ); // Is Null
if( $tz1g->_apiObject( $tz1g->getTimeType(), $tz1g->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['tz1g', 0, $tz1g->_apiObject( $tz1g->getTimeType(), $tz1g->getDateType() ) ] );
}

$tz1h = new thyme( '2021/1/1', '2021/1/2', ' ', 0, 3, 0 ); // Is space
if( $tz1h->_apiObject( $tz1h->getTimeType(), $tz1h->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['tz1h', 0, $tz1h->_apiObject( $tz1h->getTimeType(), $tz1h->getDateType() ) ] );
}

$tz1i = new thyme( '2021/1/1', '2021/1/2', '', 0, 3, 0); // Is empty
if( $tz1i->_apiObject( $tz1i->getTimeType(), $tz1i->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['tz1i', 0, $tz1i->_apiObject( $tz1i->getTimeType(), $tz1i->getDateType() ) ] );
}

$tz1j = new thyme( '2021/1/1', '2021/1/2', [], 0, 3, 0 ); // Is Array
if( $tz1j->_apiObject( $tz1j->getTimeType(), $tz1j->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['tz1j', 0, $tz1j->_apiObject( $tz1j->getTimeType(), $tz1j->getDateType() ) ] );
}

$tz1k = new thyme( '2021/1/2', NAN, 0, 1, 0 ); // Is Array
if( $tz1k->_apiObject( $tz1k->getTimeType(), $tz1k->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['tz1k', 0, $tz1k->_apiObject( $tz1k->getTimeType(), $tz1k->getDateType() ) ] );
}

#############################################
## Test harness to check timezone object 2 ##
#############################################

$tz2a = new thyme( '2021/1/1', '2021/1/2', 0, -12, 3, 0 ); // limit
if( $tz2a->_apiObject( $tz2a->getTimeType(), $tz2a->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['tz2a', 0, $tz2a->_apiObject( $tz2a->getTimeType(), $tz2a->getDateType() ) ] );
}

$tz2b = new thyme( '2021/1/1', '2021/1/2', 0, 13, 3, 0 ); // limit
if( $tz2b->_apiObject( $tz2b->getTimeType(), $tz2b->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['tz2b', 0, $tz2b->_apiObject( $tz2b->getTimeType(), $tz2b->getDateType() ) ] );
}

$tz2c = new thyme( '2021/1/1', '2021/1/2', 0, -13, 3, 0 ); // OOB
if( $tz2c->_apiObject( $tz2c->getTimeType(), $tz2c->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['tz2c', 0, $tz2c->_apiObject( $tz2c->getTimeType(), $tz2c->getDateType() ) ] );
}

$tz2d = new thyme( '2021/1/1', '2021/1/2', 0, 14, 3, 0 ); // OOB
if( $tz2d->_apiObject( $tz2d->getTimeType(), $tz2d->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['tz2d', 0, $tz2d->_apiObject( $tz2d->getTimeType(), $tz2d->getDateType() ) ] );
}

$tz2e = new thyme( '2021/1/1', '2021/1/2', 0, 1, 3, 0 ); // In Range
if( $tz2e->_apiObject( $tz2e->getTimeType(), $tz2e->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['tz2e', 0, $tz2e->_apiObject( $tz2e->getTimeType(), $tz2e->getDateType() ) ] );
}

$tz2f = new thyme( '2021/1/1', '2021/1/2', 0,'a', 3, 0 ); // Is Nan
if( $tz2f->_apiObject( $tz2f->getTimeType(), $tz2f->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['tz2f', 0, $tz2f->_apiObject( $tz2f->getTimeType(), $tz2f->getDateType() ) ] );
}

$tz2g = new thyme( '2021/1/1', '2021/1/2', 0, NULL, 3, 0 ); // Is Null
if( $tz2g->_apiObject( $tz2g->getTimeType(), $tz2g->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['tz2g', 0, $tz2g->_apiObject( $tz2g->getTimeType(), $tz2g->getDateType() ) ] );
}

$tz2h = new thyme( '2021/1/1', '2021/1/2', 0, ' ', 3, 0 ); // Is space
if( $tz2h->_apiObject( $tz2h->getTimeType(), $tz2h->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['tz2h', 0, $tz2h->_apiObject( $tz2h->getTimeType(), $tz2h->getDateType() ) ] );
}

$tz2i = new thyme( '2021/1/1', '2021/1/2', 0, '', 3, 0 ); // Is empty
if( $tz2i->_apiObject( $tz2i->getTimeType(), $tz2i->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['tz2i', 0, $tz2i->_apiObject( $tz2i->getTimeType(), $tz2i->getDateType() ) ] );
}

$tz2j = new thyme( '2021/1/1', '2021/1/2', 0, [], 3, 0 ); // Is Array
if( $tz2j->_apiObject( $tz2j->getTimeType(), $tz2j->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['tz2j', 0, $tz2j->_apiObject( $tz2j->getTimeType(), $tz2j->getDateType() ) ] );
}

$tz2k = new thyme( '2021/1/1', '2021/1/2', 0, NAN, 3, 0 ); // Is Array
if( $tz2k->_apiObject( $tz2k->getTimeType(), $tz2k->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['tz2k', 0, $tz2k->_apiObject( $tz2k->getTimeType(), $tz2k->getDateType() ) ] );
}

############################################
## Test harness to check datetype select  ##
############################################

$dta = new thyme( '2021/1/1', '2021/1/2', 0, 0, 0, 0 ); // limit
if( $dta->_apiObject( $dta->getTimeType(), $dta->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dta', 0, $dta->_apiObject( $dta->getTimeType(), $dta->getDateType() ) ] );
} 

$dtb = new thyme( '2021/1/1', '2021/1/2', 0, 0, 3, 0 ); // limit
if( $dtb->_apiObject( $dtb->getTimeType(), $dtb->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dtb', 0, $dtb->_apiObject( $dtb->getTimeType(), $dtb->getDateType() ) ] );
} 

$dtc = new thyme( '2021/1/1', '2021/1/2', 0, 0, 4, 0 ); // OOB
if( $dtc->_apiObject( $dtc->getTimeType(), $dtc->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dtc', 0, $dtc->_apiObject( $dtc->getTimeType(), $dtc->getDateType() ) ] );
} 

$dtd = new thyme( '2021/1/1', '2021/1/2', 0, 0, -1, 0 ); // OOB
if( $dtd->_apiObject( $dtd->getTimeType(), $dtd->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dtd', 0, $dtd->_apiObject( $dtd->getTimeType(), $dtd->getDateType() ) ] );
} 

$dte = new thyme( '2021/1/1', '2021/1/2', 0, 0, 1, 0 ); // In Range
if( $dte->_apiObject( $dte->getTimeType(), $dte->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dte', 0, $dte->_apiObject( $dte->getTimeType(), $dte->getDateType() ) ] );
} 

$dtf = new thyme( '2021/1/1', '2021/1/2', 0, 0, 'a', 0 ); // Is Nan
if( $dtf->_apiObject( $dtf->getTimeType(), $dtf->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dtf', 0, $dtf->_apiObject( $dtf->getTimeType(), $dtf->getDateType() ) ] );
} 

$dtg = new thyme( '2021/1/1', '2021/1/2', 0, 0, NULL, 0 ); // Is Null
if( $dtg->_apiObject( $dtg->getTimeType(), $dtg->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dtg', 0, $dtg->_apiObject( $dtg->getTimeType(), $dtg->getDateType() ) ] );
} 

$dth = new thyme( '2021/1/1', '2021/1/2', 0, 0, ' ', 0 ); // Is space
if( $dth->_apiObject( $dth->getTimeType(), $dth->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dth', 0, $dth->_apiObject( $dth->getTimeType(), $dth->getDateType() ) ] );
} 

$dti = new thyme( '2021/1/1', '2021/1/2', 0, 0, '', 0 ); // Is empty
if( $dti->_apiObject( $dti->getTimeType(), $dti->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dti', 0, $dti->_apiObject( $dti->getTimeType(), $dti->getDateType() ) ] );
} 

$dtj = new thyme( '2021/1/1', '2021/1/2', 0, 3, [], 0 ); // Is Array
if( $dtj->_apiObject( $dtj->getTimeType(), $dtj->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dtj', 0, $dtj->_apiObject( $dtj->getTimeType(), $dtj->getDateType() ) ] );
} 

$dtjk = new thyme( '2021/1/1', '2021/1/2', 0, 3, NAN, 0 ); // Is NAN
if( $dtjk->_apiObject( $dtjk->getTimeType(), $dtjk->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['dtjk', 0, $dtjk->_apiObject( $dtjk->getTimeType(), $dtjk->getDateType() ) ] );
}

############################################
## Test harness to check timetype select  ##
############################################

$tta = new thyme( '2021/1/1', '2021/1/2', 0, 0, 0, 0 ); // limit
if( $tta->_apiObject( $tta->getTimeType(), $tta->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['tta', 0, $tta->_apiObject( $tta->getTimeType(), $tta->getDateType() ) ] );
} 
$ttb = new thyme( '2021/1/1', '2021/1/2', 0, 0, 0, 4 ); // limit
if( $ttb->_apiObject( $ttb->getTimeType(), $ttb->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['ttb', 0, $ttb->_apiObject( $ttb->getTimeType(), $ttb->getDateType() ) ] );
} 
$ttc = new thyme( '2021/1/1', '2021/1/2', 0, 0, 0, 5 ); // OOB
if( $ttc->_apiObject( $ttc->getTimeType(), $ttc->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['ttc', 0, $ttc->_apiObject( $ttc->getTimeType(), $ttc->getDateType() ) ] );
} 
$ttd = new thyme( '2021/1/1', '2021/1/2', 0, 0, 0, -1 ); // OOB
if( $ttd->_apiObject( $ttd->getTimeType(), $ttd->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['ttd', 0, $ttd->_apiObject( $ttd->getTimeType(), $ttd->getDateType() ) ] );
} 
$tte = new thyme( '2021/1/1', '2021/1/2', 0, 0, 0, 1 ); // In Range
if( $tte->_apiObject( $tte->getTimeType(), $tte->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['tte', 0, $tte->_apiObject( $tte->getTimeType(), $tte->getDateType() ) ] );
} 

$ttf = new thyme( '2021/1/1', '2021/1/2', 0, 0, 0, 'a' ); // Is Nan
if( $ttf->_apiObject( $ttf->getTimeType(), $ttf->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['ttf', 0, $ttf->_apiObject( $ttf->getTimeType(), $ttf->getDateType() ) ] );
} 

$ttg = new thyme( '2021/1/1', '2021/1/2', 0, 0, 0, NULL ); // Is Null
if( $ttg->_apiObject( $ttg->getTimeType(), $ttg->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['ttg', 0, $ttg->_apiObject( $ttg->getTimeType(), $ttg->getDateType() ) ] );
} 

$tth = new thyme( '2021/1/1', '2021/1/2', 0, 0, 0, ' ' ); // Is space
if( $tth->_apiObject( $tth->getTimeType(), $tth->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['tth', 0, $tth->_apiObject( $tth->getTimeType(), $tth->getDateType() ) ] );
} 

$tti = new thyme( '2021/1/1', '2021/1/2', 0, 0, 0, '' ); // Is empty
if( $tti->_apiObject( $tti->getTimeType(), $tti->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['tti', 0, $tti->_apiObject( $tti->getTimeType(), $tti->getDateType() ) ] );
} 

$ttj = new thyme( '2021/1/1', '2021/1/2', 0, 0, 0, [] ); // Is Array
if( $ttj->_apiObject( $ttj->getTimeType(), $ttj->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['ttj', 0, $ttj->_apiObject( $ttj->getTimeType(), $ttj->getDateType() ) ] );
} 

$ttj = new thyme( '2021/1/1', '2021/1/2', 0, 0, 0, NAN ); // Is NAN
if( $ttj->_apiObject( $ttj->getTimeType(), $ttj->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['ttj', 0, $ttj->_apiObject( $ttj->getTimeType(), $ttj->getDateType() ) ] );
}
#######################################################
## Test harness to check correct BETWEEN TOTAL DAYS  ##
#######################################################
//////////////////////////////////
// Same Day TOTAL DAYS Test set ///
// sdtd [NaN]                   ////
/////////////////////////////////////
// (Total Days, Days)
$sdtda = new thyme( '2021/1/1', '2021/1/1', 0, 0, 1, 0 );
if( $sdtda->_apiObject( $sdtda->getTimeType(), $sdtda->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sdtda', 0, $sdtda->_apiObject( $sdtda->getTimeType(), $sdtda->getDateType() ) ] );
} 

// TZ = 25
$sdtdb = new thyme( '2021/1/1', '2021/1/1', -12, 13, 1, 0 );
if( $sdtdb->_apiObject( $sdtdb->getTimeType(), $sdtdb->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sdtdb', 0, $sdtdb->_apiObject( $sdtdb->getTimeType(), $sdtdb->getDateType() ) ] );
} 

// (Total Days, Seconds)
$sdtdc = new thyme( '2021/1/1', '2021/1/1', 0, 0, 1, 1 ); 
if( $sdtdc->_apiObject( $sdtdc->getTimeType(), $sdtdc->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sdtdc', 0, $sdtdc->_apiObject( $sdtdc->getTimeType(), $sdtdc->getDateType() ) ] );
} 

// (Total Days, minutes)
$sdtdd = new thyme( '2021/1/1', '2021/1/1', 0, 0, 1, 2 ); 
if( $sdtdd->_apiObject( $sdtdd->getTimeType(), $sdtdd->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sdtdd', 0, $sdtdd->_apiObject( $sdtdd->getTimeType(), $sdtdd->getDateType() ) ] );
} 

// (Total Days, hours)
$sdtde = new thyme( '2021/1/1', '2021/1/1', 0, 0, 1, 3 ); 
if( $sdtde->_apiObject( $sdtde->getTimeType(), $sdtde->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sdtde', 0, $sdtde->_apiObject( $sdtde->getTimeType(), $sdtde->getDateType() ) ] );
} 

// (Total Days, years)
$sdtdf = new thyme( '2021/1/1', '2021/1/1', 0, 0, 1, 4 ); 
if( $sdtdf->_apiObject( $sdtdf->getTimeType(), $sdtdf->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sdtdf', 0, $sdtdf->_apiObject( $sdtdf->getTimeType(), $sdtdf->getDateType() ) ] );
} 

//////////////////////////////////
// Same Day WEEK DAYS Test set ////
// sdwd [NaN]                   ////
/////////////////////////////////////
// (Total Days, Days)
$sdwda = new thyme( '2021/1/1', '2021/1/1', 0, 0, 1, 0 );
if( $sdwda->_apiObject( $sdwda->getTimeType(), $sdwda->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sdwda', 0, $sdwda->_apiObject( $sdwda->getTimeType(), $sdwda->getDateType() ) ] );
} 
// Same Day Week Day Sat-Sun TZ = 25 (Total Days, days)
$sdwdb = new thyme( '2021/1/1', '2021/1/1', -12, 13, 1, 0 );
if( $sdwdb->_apiObject( $sdwdb->getTimeType(), $sdwdb->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sdwdb', 0, $sdwdb->_apiObject( $sdwdb->getTimeType(), $sdwdb->getDateType() ) ] );
} 
// (Total Days, Seconds)
$sdwdc = new thyme( '2021/1/1', '2021/1/1', 0, 0, 1, 1 );
if( $sdwdc->_apiObject( $sdwdc->getTimeType(), $sdwdc->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sdwdc', 0, $sdwdc->_apiObject( $sdwdc->getTimeType(), $sdwdc->getDateType() ) ] );
} 

// (Total Days, minutes)
$sdwdd = new thyme( '2021/1/1', '2021/1/1', 0, 0, 1, 2 );
if( $sdwdd->_apiObject( $sdwdd->getTimeType(), $sdwdd->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sdwdd', 0, $sdwdd->_apiObject( $sdwdd->getTimeType(), $sdwdd->getDateType() ) ] );
} 

// (Total Days, hours)
$sdwde = new thyme( '2021/1/1', '2021/1/1', 0, 0, 1, 3 ); 
if( $sdwde->_apiObject( $sdwde->getTimeType(), $sdwde->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sdwde', 0, $sdwde->_apiObject( $sdwde->getTimeType(), $sdwde->getDateType() ) ] );
} 

// (Total Days, years)
$sdwdf = new thyme( '2021/1/1', '2021/1/1', 0, 0, 1, 4 ); 
if( $sdwdf->_apiObject( $sdwdf->getTimeType(), $sdwdf->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sdwdf', 0, $sdwdf->_apiObject( $sdwdf->getTimeType(), $sdwdf->getDateType() ) ] );
} 

//////////////////////////////////
// Next Day TOTAL DAYS Test set ///
// ndtd [NaN]                   ////
/////////////////////////////////////
// Next Day (Total Days, days)
$ndtda = new thyme( '2021/1/1', '2021/1/2', 0, 0, 1, 0 ); 
if( $ndtda->_apiObject( $ndtda->getTimeType(), $ndtda->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['ndtda', 0, $ndtda->_apiObject( $ndtda->getTimeType(), $ndtda->getDateType() ) ] );
} 

// Next Day Sat-Sun TZ = 25
$ndtdb = new thyme( '2021/1/1', '2021/1/2', -12, 13, 1, 0 ); 
if( $ndtdb->_apiObject( $ndtdb->getTimeType(), $ndtdb->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['ndtdb', 0, $ndtdb->_apiObject( $ndtdb->getTimeType(), $ndtdb->getDateType() ) ] );
} 

 // Next Day (Total Days, seconds)
$ndtdc = new thyme( '2021/1/1', '2021/1/2', 0, 0, 1, 1 );
if( $ndtdc->_apiObject( $ndtdc->getTimeType(), $ndtdc->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['ndtdc', 0, $ndtdc->_apiObject( $ndtdc->getTimeType(), $ndtdc->getDateType() ) ] );
} 

// Next Day (Total Days, minutes)
$ndtdd = new thyme( '2021/1/1', '2021/1/2', 0, 0, 1, 2 ); 
if( $ndtdd->_apiObject( $ndtdd->getTimeType(), $ndtdd->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['ndtdd', 0, $ndtdd->_apiObject( $ndtdd->getTimeType(), $ndtdd->getDateType() ) ] );
} 

// Next Day (Total Days, hours)
$ndtde = new thyme( '2021/1/1', '2021/1/2', 0, 0, 1, 3 ); 
if( $ndtde->_apiObject( $ndtde->getTimeType(), $ndtde->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['ndtde', 0, $ndtde->_apiObject( $ndtde->getTimeType(), $ndtde->getDateType() ) ] );
} 

// Next Day (Total Days, years)
$ndtdf = new thyme( '2021/1/1', '2021/1/2', 0, 0, 1, 4 ); 
if( $ndtdf->_apiObject( $ndtdf->getTimeType(), $ndtdf->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['ndtdf', 0, $ndtdf->_apiObject( $ndtdf->getTimeType(), $ndtdf->getDateType() ) ] );
} 

//////////////////////////////////
// 2 Days TOTAL DAYS Test set   ///
// twodaystd [NaN]              ////
/////////////////////////////////////
// 2 Days (Total Days, days)
$twodaystda = new thyme( '2021/1/1', '2021/1/3', 0, 0, 1, 0 );
if( $twodaystda->_apiObject( $twodaystda->getTimeType(), $twodaystda->getDateType() ) == 1 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodaystda', 1, $twodaystda->_apiObject( $twodaystda->getTimeType(), $twodaystda->getDateType() ) ] );
} 

// 2 Days TZ = 25 (Total Days, days)
$twodaystdb = new thyme( '2021/1/1', '2021/1/3', -12, 13, 1, 0 ); 
if( $twodaystdb->_apiObject( $twodaystdb->getTimeType(), $twodaystdb->getDateType() ) == 2 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodaystdb', 2, $twodaystdb->_apiObject( $twodaystdb->getTimeType(), $twodaystdb->getDateType() ) ] );
} 

 // 2 Days (Total Days, seconds)
$twodaystdc = new thyme( '2021/1/1', '2021/1/3', 0, 0, 1, 1 );
if( $twodaystdc->_apiObject( $twodaystdc->getTimeType(), $twodaystdc->getDateType() ) == 86400 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodaystdc', 86400, $twodaystdc->_apiObject( $twodaystdc->getTimeType(), $twodaystdc->getDateType() ) ] );
} 

// 2 Days (Total Days, minutes)
$twodaystdd = new thyme( '2021/1/1', '2021/1/3', 0, 0, 1, 2 );
if( $twodaystdd->_apiObject( $twodaystdd->getTimeType(), $twodaystdd->getDateType() ) == 1400 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodaystdd', 1400 , $twodaystdd->_apiObject( $twodaystdd->getTimeType(), $twodaystdd->getDateType() ) ] );
} 

// 2 Days (Total Days, hours)
$twodaystde = new thyme( '2021/1/1', '2021/1/3', 0, 0, 1, 3 );
if( $twodaystde->_apiObject( $twodaystde->getTimeType(), $twodaystde->getDateType() ) == 24 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodaystde', 24, $twodaystde->_apiObject( $twodaystde->getTimeType(), $twodaystde->getDateType() ) ] );
} 

// 2 Days (Total Days, years)
$twodaystdf = new thyme( '2021/1/1', '2021/1/3', 0, 0, 1, 4 ); 
if( $twodaystdf->_apiObject( $twodaystdf->getTimeType(), $twodaystdf->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodaystdf', 0, $twodaystdf->_apiObject( $twodaystdf->getTimeType(), $twodaystdf->getDateType() ) ] );
} 

//////////////////////////////////
// 2 Days Week DAYS Test set    ///
// twodayswd [NaN]              ////
/////////////////////////////////////
// 2 Days (Total Days, days)
$twodayswda = new thyme( '2021/1/4', '2021/1/6', 0, 0, 1, 0 );
if( $twodayswda->_apiObject( $twodayswda->getTimeType(), $twodayswda->getDateType() ) == 1 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodayswda', 1, $twodayswda->_apiObject( $twodayswda->getTimeType(), $twodayswda->getDateType() ) ] );
} 

// 2 Days TZ = 25 (Total Days, days)
$twodayswdb = new thyme( '2021/1/4', '2021/1/6', -12, 13, 1, 0 ); 
if( $twodayswdb->_apiObject( $twodayswdb->getTimeType(), $twodayswdb->getDateType() ) == 2 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodayswdb', 2, $twodayswdb->_apiObject( $twodayswdb->getTimeType(), $twodayswdb->getDateType() ) ] );
} 

 // 2 Days (Total Days, seconds)
$twodayswdc = new thyme( '2021/1/4', '2021/1/6', 0, 0, 1, 1 );
if( $twodayswdc->_apiObject( $twodayswdc->getTimeType(), $twodayswdc->getDateType() ) == 86400 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodayswdc', 86400, $twodayswdc->_apiObject( $twodayswdc->getTimeType(), $twodayswdc->getDateType() ) ] );
} 

// 2 Days (Total Days, minutes)
$twodayswdd = new thyme( '2021/1/4', '2021/1/6', 0, 0, 1, 2 );
if( $twodayswdd->_apiObject( $twodayswdd->getTimeType(), $twodayswdd->getDateType() ) == 1400 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodayswdd', 1400 , $twodayswdd->_apiObject( $twodayswdd->getTimeType(), $twodayswdd->getDateType() ) ] );
} 

// 2 Days (Total Days, hours)
$twodayswde = new thyme( '2021/1/4', '2021/1/6', 0, 0, 1, 3 );
if( $twodayswde->_apiObject( $twodayswde->getTimeType(), $twodayswde->getDateType() ) == 24 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodayswde', 24, $twodayswde->_apiObject( $twodayswde->getTimeType(), $twodayswde->getDateType() ) ] );
} 

// 2 Days (Total Days, years)
$twodayswdf = new thyme( '2021/1/4', '2021/1/6', 0, 0, 1, 4 ); 
if( $twodayswdf->_apiObject( $twodayswdf->getTimeType(), $twodayswdf->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodayswdf', 0, $twodayswdf->_apiObject( $twodayswdf->getTimeType(), $twodayswdf->getDateType() ) ] );
} 

/////////////////////////////////////
// 2 Days Complete Week Test set   ///
// twodayscw [NaN]                 ////
////////////////////////////////////////
// 2 Days ( Complete Week, days )
$twodayscwa = new thyme( '2021/1/4', '2021/1/6', 0, 0, 3, 0 );
if( $twodayscwa->_apiObject( $twodayscwa->getTimeType(), $twodayscwa->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodayscwa', 0, $twodayscwa->_apiObject( $twodayscwa->getTimeType(), $twodayscwa->getDateType() ) ] );
} 

// 2 Days TZ = 25 ( Complete Week, days )
$twodayscwb = new thyme( '2021/1/4', '2021/1/6', -12, 13, 3, 0 ); 
if( $twodayscwb->_apiObject( $twodayscwb->getTimeType(), $twodayscwb->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodayscwb', 0, $twodayscwb->_apiObject( $twodayscwb->getTimeType(), $twodayscwb->getDateType() ) ] );
} 

 // 2 Days ( Complete Week, seconds )
$twodayscwc = new thyme( '2021/1/4', '2021/1/6', 0, 0, 3, 1 );
if( $twodayscwc->_apiObject( $twodayscwc->getTimeType(), $twodayscwc->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodayscwc', 0, $twodayscwc->_apiObject( $twodayscwc->getTimeType(), $twodayscwc->getDateType() ) ] );
} 

// 2 Days ( Complete Week, minutes )
$twodayscwd = new thyme( '2021/1/4', '2021/1/6', 0, 0, 3, 2 );
if( $twodayscwd->_apiObject( $twodayscwd->getTimeType(), $twodayscwd->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodayscwd', 0, $twodayscwd->_apiObject( $twodayscwd->getTimeType(), $twodayscwd->getDateType() ) ] );
} 

// 2 Days ( Complete Week, hours )
$twodayscwe = new thyme( '2021/1/4', '2021/1/6', 0, 0, 3, 3 );
if( $twodayscwe->_apiObject( $twodayscwe->getTimeType(), $twodayscwe->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodayscwe', 0, $twodayscwe->_apiObject( $twodayscwe->getTimeType(), $twodayscwe->getDateType() ) ] );
} 

// 2 Days ( Complete Week, years )
$twodayscwf = new thyme( '2021/1/4', '2021/1/6', 0, 0, 3, 4 ); 
if( $twodayswdf->_apiObject( $twodayscwf->getTimeType(), $twodayscwf->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodayscwf', 0, $twodayscwf->_apiObject( $twodayscwf->getTimeType(), $twodayscwf->getDateType() ) ] );
} 

/////////////////////////////////////
// 7 Days Total Days Test set      ///
// sevendaystd [NaN]               ////
////////////////////////////////////////
// ( Complete Week, days )
$sevendaystda = new thyme( '2021/1/4', '2021/1/12', 0, 0, 1, 0 );
if( $sevendaystda->_apiObject( $sevendaystda->getTimeType(), $sevendaystda->getDateType() ) == 7 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sevendaystda', 7, $sevendaystda->_apiObject( $sevendaystda->getTimeType(), $sevendaystda->getDateType() ) ] );
} 

// TZ = 25 ( Complete Week, days )
$sevendaystdb = new thyme( '2021/1/4', '2021/1/12', -12, 13, 1, 0 ); 
if( $sevendaystdb->_apiObject( $sevendaystdb->getTimeType(), $sevendaystdb->getDateType() ) == 8 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sevendaystdb', 8, $sevendaystdb->_apiObject( $sevendaystdb->getTimeType(), $sevendaystdb->getDateType() ) ] );
} 

 // ( Complete Week, seconds )
$twodayscwc = new thyme( '2021/1/4', '2021/1/12', 0, 0, 1, 1 );
if( $twodayscwc->_apiObject( $twodayscwc->getTimeType(), $twodayscwc->getDateType() ) == 604800 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodayscwc', 86604800400, $twodayscwc->_apiObject( $twodayscwc->getTimeType(), $twodayscwc->getDateType() ) ] );
} 

//  Complete Week, minutes )
$twodayscwd = new thyme( '2021/1/4', '2021/1/12', 0, 0, 1, 2 );
if( $twodayscwd->_apiObject( $twodayscwd->getTimeType(), $twodayscwd->getDateType() ) == 9800 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodayscwd', 9800, $twodayscwd->_apiObject( $twodayscwd->getTimeType(), $twodayscwd->getDateType() ) ] );
} 

// ( Complete Week, hours )
$twodayscwe = new thyme( '2021/1/4', '2021/1/12', 0, 0, 1, 3 );
if( $twodayscwe->_apiObject( $twodayscwe->getTimeType(), $twodayscwe->getDateType() ) == 168 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodayscwe', 168, $twodayscwe->_apiObject( $twodayscwe->getTimeType(), $twodayscwe->getDateType() ) ] );
} 

// ( Complete Week, years )
$twodayscwf = new thyme( '2021/1/4', '2021/1/12', 0, 0, 1, 4 ); 
if( $twodayswdf->_apiObject( $twodayscwf->getTimeType(), $twodayscwf->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['twodayscwf', 0, $twodayscwf->_apiObject( $twodayscwf->getTimeType(), $twodayscwf->getDateType() ) ] );
} 

/////////////////////////////////////
// 7 Days Week DAYS Test set       ///
// sevendayswd [NaN]               ////
////////////////////////////////////////
// ( Week DAYS, days )
$sevendayswda = new thyme( '2021/1/4', '2021/1/12', 0, 0, 2, 0 );
if( $sevendayswda->_apiObject( $sevendayswda->getTimeType(), $sevendayswda->getDateType() ) == 5 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sevendayswda', 5, $sevendayswda->_apiObject( $sevendayswda->getTimeType(), $sevendayswda->getDateType() ) ] );
} 

// TZ = 25 ( Week DAYS, days )
$sevendayswdb = new thyme( '2021/1/4', '2021/1/12', -12, 13, 1, 0 ); 
if( $sevendayswdb->_apiObject( $sevendayswdb->getTimeType(), $sevendayswdb->getDateType() ) == 8 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sevendayswdb', 8, $sevendayswdb->_apiObject( $sevendayswdb->getTimeType(), $sevendayswdb->getDateType() ) ] );
} 

 // ( Week DAYS, seconds )
$sevendayswdc = new thyme( '2021/1/4', '2021/1/12', 0, 0, 1, 1 );
if( $sevendayswdc->_apiObject( $sevendayswdc->getTimeType(), $sevendayswdc->getDateType() ) == 604800 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sevendayswdc', 604800, $sevendayswdc->_apiObject( $sevendayswdc->getTimeType(), $sevendayswdc->getDateType() ) ] );
} 

//  ( Week DAYS, minutes )
$sevendayswdd = new thyme( '2021/1/4', '2021/1/12', 0, 0, 1, 2 );
if( $sevendayswdd->_apiObject( $sevendayswdd->getTimeType(), $sevendayswdd->getDateType() ) == 9800 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sevendayswdd', 9800, $sevendayswdd->_apiObject( $sevendayswdd->getTimeType(), $sevendayswdd->getDateType() ) ] );
} 

// ( Week DAYS, hours )
$sevendayswde = new thyme( '2021/1/4', '2021/1/12', 0, 0, 1, 3 );
if( $sevendayswde->_apiObject( $sevendayswde->getTimeType(), $sevendayswde->getDateType() ) == 168 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sevendayswde', 168, $sevendayswde->_apiObject( $sevendayswde->getTimeType(), $sevendayswde->getDateType() ) ] );
} 

// ( Week DAYS, years )
$sevendayswdf = new thyme( '2021/1/4', '2021/1/12', 0, 0, 1, 4 ); 
if( $sevendayswdf->_apiObject( $sevendayswdf->getTimeType(), $sevendayswdf->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sevendayswdf', 0, $sevendayswdf->_apiObject( $sevendayswdf->getTimeType(), $sevendayswdf->getDateType() ) ] );
}

/////////////////////////////////////
// 7 Days Complete Week Test set   ///
// sevendayscw [NaN]               ////
////////////////////////////////////////
// ( Week DAYS, days )
$sevendayscwa = new thyme( '2021/1/4', '2021/1/12', 0, 0, 3, 0 );
if( $sevendayscwa->_apiObject( $sevendayscwa->getTimeType(), $sevendayscwa->getDateType() ) == 1 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sevendayscwa', 1, $sevendayscwa->_apiObject( $sevendayscwa->getTimeType(), $sevendayscwa->getDateType() ) ] );
} 

// TZ = 25 ( Week DAYS, days )
$sevendayscwb = new thyme( '2021/1/4', '2021/1/12', -12, 13, 3, 0 ); 
if( $sevendayscwb->_apiObject( $sevendayscwb->getTimeType(), $sevendayscwb->getDateType() ) == 1 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sevendayscwb', 1, $sevendayscwb->_apiObject( $sevendayscwb->getTimeType(), $sevendayscwb->getDateType() ) ] );
} 

 // ( Week DAYS, seconds )
$sevendayscwc = new thyme( '2021/1/4', '2021/1/12', 0, 0, 3, 1 );
if( $sevendayscwc->_apiObject( $sevendayscwc->getTimeType(), $sevendayscwc->getDateType() ) == 604800 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sevendayscwc', 604800, $sevendayscwc->_apiObject( $sevendayscwc->getTimeType(), $sevendayscwc->getDateType() ) ] );
} 

//  ( Week DAYS, minutes )
$sevendayscwd = new thyme( '2021/1/4', '2021/1/12', 0, 0, 3, 2 );
if( $sevendayscwd->_apiObject( $sevendayscwd->getTimeType(), $sevendayscwd->getDateType() ) == 9800 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sevendayscwd', 9800, $sevendayscwd->_apiObject( $sevendayscwd->getTimeType(), $sevendayscwd->getDateType() ) ] );
} 

// ( Week DAYS, hours )
$sevendayscwe = new thyme( '2021/1/4', '2021/1/12', 0, 0, 3, 3 );
if( $sevendayscwe->_apiObject( $sevendayscwe->getTimeType(), $sevendayscwe->getDateType() ) == 168 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sevendayscwe', 168, $sevendayscwe->_apiObject( $sevendayscwe->getTimeType(), $sevendayscwe->getDateType() ) ] );
} 

// ( Week DAYS, years )
$sevendayscwf = new thyme( '2021/1/4', '2021/1/12', 0, 0, 3, 4 ); 
if( $sevendayscwf->_apiObject( $sevendayscwf->getTimeType(), $sevendayscwf->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['sevendayscwf', 0, $sevendayscwf->_apiObject( $sevendayscwf->getTimeType(), $sevendayscwf->getDateType() ) ] );
} 

/////////////////////////////////////
// 14 Days Total Days              ///
// fourteendaystd [NaN]            ////
////////////////////////////////////////
// ( Week DAYS, days )
$fourteendaystda = new thyme( '2021/1/4', '2021/1/19', 0, 0, 1, 0 );
if( $fourteendaystda->_apiObject( $fourteendaystda->getTimeType(), $fourteendaystda->getDateType() ) == 14 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['fourteendaystda', 14, $fourteendaystda->_apiObject( $fourteendaystda->getTimeType(), $fourteendaystda->getDateType() ) ] );
} 

// TZ = 25 ( Week DAYS, days )
$fourteendaystdb = new thyme( '2021/1/4', '2021/1/19', -12, 13, 1, 0 ); 
if( $fourteendaystdb->_apiObject( $fourteendaystdb->getTimeType(), $fourteendaystdb->getDateType() ) == 15 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['fourteendaystdb', 15, $fourteendaystdb->_apiObject( $fourteendaystdb->getTimeType(), $fourteendaystdb->getDateType() ) ] );
} 

 // ( Week DAYS, seconds )
$fourteendaystdc = new thyme( '2021/1/4', '2021/1/19', 0, 0, 1, 1 );
if( $fourteendaystdc->_apiObject( $fourteendaystdc->getTimeType(), $fourteendaystdc->getDateType() ) == 86400 * 14 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['fourteendaystdc', 86400 * 14, $fourteendaystdc->_apiObject( $fourteendaystdc->getTimeType(), $fourteendaystdc->getDateType() ) ] );
} 

//  ( Week DAYS, minutes )
$fourteendaystdd = new thyme( '2021/1/4', '2021/1/19', 0, 0, 1, 2 );
if( $fourteendaystdd->_apiObject( $fourteendaystdd->getTimeType(), $fourteendaystdd->getDateType() ) == 1400 * 14 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['fourteendaystdd', 1400 * 14, $fourteendaystdd->_apiObject( $fourteendaystdd->getTimeType(), $fourteendaystdd->getDateType() ) ] );
} 

// ( Week DAYS, hours )
$fourteendaystde = new thyme( '2021/1/4', '2021/1/19', 0, 0, 1, 3 );
if( $fourteendaystde->_apiObject( $fourteendaystde->getTimeType(), $fourteendaystde->getDateType() ) == 24 * 14 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['fourteendaystde', 24 * 14, $fourteendaystde->_apiObject( $fourteendaystde->getTimeType(), $fourteendaystde->getDateType() ) ] );
} 

// ( Week DAYS, years )
$fourteendaystdf = new thyme( '2021/1/4', '2021/1/19', 0, 0, 1, 4 ); 
if( $fourteendaystdf->_apiObject( $fourteendaystdf->getTimeType(), $fourteendaystdf->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['fourteendaystdf', 0, $fourteendaystdf->_apiObject( $fourteendaystdf->getTimeType(), $fourteendaystdf->getDateType() ) ] );
} 

/////////////////////////////////////
// 14 Days Week Days               ///
// fourteendayswd [NaN]            ////
////////////////////////////////////////
// ( Week DAYS, days )
$fourteendayswa = new thyme( '2021/1/4', '2021/1/19', 0, 0, 2, 0 );
if( $fourteendayswa->_apiObject( $fourteendayswa->getTimeType(), $fourteendayswa->getDateType() ) == 10 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['fourteendayswa', 10, $fourteendayswa->_apiObject( $fourteendayswa->getTimeType(), $fourteendayswa->getDateType() ) ] );
} 

// TZ = 25 ( Week DAYS, days )
$fourteendayswb = new thyme( '2021/1/4', '2021/1/19', -12, 13, 2, 0 ); 
if( $fourteendayswb->_apiObject( $fourteendayswb->getTimeType(), $fourteendayswb->getDateType() ) == 11 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['fourteendayswb', 11, $fourteendayswb->_apiObject( $fourteendayswb->getTimeType(), $fourteendayswb->getDateType() ) ] );
} 

 // ( Week DAYS, seconds )
$fourteendayswc = new thyme( '2021/1/4', '2021/1/19', 0, 0, 2, 1 );
if( $fourteendayswc->_apiObject( $fourteendayswc->getTimeType(), $fourteendayswc->getDateType() ) == 86400 * 10 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['fourteendayswc', 86400 * 10, $fourteendayswc->_apiObject( $fourteendayswc->getTimeType(), $fourteendayswc->getDateType() ) ] );
} 

//  ( Week DAYS, minutes )
$fourteendayswd = new thyme( '2021/1/4', '2021/1/19', 0, 0, 2, 2 );
if( $fourteendayswd->_apiObject( $fourteendayswd->getTimeType(), $fourteendayswd->getDateType() ) == 1400 * 10 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['fourteendayswd', 1400 * 10, $fourteendayswd->_apiObject( $fourteendayswd->getTimeType(), $fourteendayswd->getDateType() ) ] );
} 

// ( Week DAYS, hours )
$fourteendayswe = new thyme( '2021/1/4', '2021/1/19', 0, 0, 2, 3 );
if( $fourteendayswe->_apiObject( $fourteendayswe->getTimeType(), $fourteendayswe->getDateType() ) == 24 * 10 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['fourteendayswe', 24 * 10, $fourteendayswe->_apiObject( $fourteendayswe->getTimeType(), $fourteendayswe->getDateType() ) ] );
} 

// ( Week DAYS, years )
$fourteendayswf = new thyme( '2021/1/4', '2021/1/19', 0, 0, 2, 4 ); 
if( $fourteendayswf->_apiObject( $fourteendayswf->getTimeType(), $fourteendayswf->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['fourteendayswf', 0, $fourteendayswf->_apiObject( $fourteendayswf->getTimeType(), $fourteendayswf->getDateType() ) ] );
} 

/////////////////////////////////////
// 14 Days Complete Week           ///
// fourteendayscw [NaN]            ////
////////////////////////////////////////
// ( Week DAYS, days )
$fourteendayscwa = new thyme( '2021/1/4', '2021/1/19', 0, 0, 3, 0 );
if( $fourteendayscwa->_apiObject( $fourteendayscwa->getTimeType(), $fourteendayscwa->getDateType() ) == 2 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['fourteendayscwa', 2, $fourteendayscwa->_apiObject( $fourteendayscwa->getTimeType(), $fourteendayscwa->getDateType() ) ] );
} 

// TZ = 25 ( Week DAYS, days )
$fourteendayscwb = new thyme( '2021/1/4', '2021/1/19', -12, 13, 3, 0 ); 
if( $fourteendayscwb->_apiObject( $fourteendayscwb->getTimeType(), $fourteendayscwb->getDateType() ) == 2 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['fourteendayscwb', 2, $fourteendayscwb->_apiObject( $fourteendayscwb->getTimeType(), $fourteendayscwb->getDateType() ) ] );
} 

 // ( Week DAYS, seconds )
$fourteendayscwc = new thyme( '2021/1/4', '2021/1/19', 0, 0, 3, 1 );
if( $fourteendayscwc->_apiObject( $fourteendayscwc->getTimeType(), $fourteendayscwc->getDateType() ) == 1209600 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['fourteendayscwc', 1209600, $fourteendayscwc->_apiObject( $fourteendayscwc->getTimeType(), $fourteendayscwc->getDateType() ) ] );
} 

//  ( Week DAYS, minutes )
$fourteendayscwd = new thyme( '2021/1/4', '2021/1/19', 0, 0, 3, 2 );
if( $fourteendayscwd->_apiObject( $fourteendayscwd->getTimeType(), $fourteendayscwd->getDateType() ) == 1400 * 14 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['fourteendayscwd', 1400 * 14, $fourteendayscwd->_apiObject( $fourteendayscwd->getTimeType(), $fourteendayscwd->getDateType() ) ] );
} 

// ( Week DAYS, hours )
$fourteendayscwe = new thyme( '2021/1/4', '2021/1/19', 0, 0, 3, 3 );
if( $fourteendayscwe->_apiObject( $fourteendayscwe->getTimeType(), $fourteendayscwe->getDateType() ) == 24 * 14 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['fourteendayscwe', 24 * 14, $fourteendayscwe->_apiObject( $fourteendayscwe->getTimeType(), $fourteendayscwe->getDateType() ) ] );
} 

// ( Week DAYS, years )
$fourteendayscwf = new thyme( '2021/1/4', '2021/1/19', 0, 0, 3, 4 ); 
if( $fourteendayscwf->_apiObject( $fourteendayscwf->getTimeType(), $fourteendayscwf->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['fourteendayscwf', 0, $fourteendayscwf->_apiObject( $fourteendayscwf->getTimeType(), $fourteendayscwf->getDateType() ) ] );
} 

/////////////////////////////////////
// 1 Year Leapyear Total Days      ///
// leapyeartd [NaN]                ////
////////////////////////////////////////
// ( Total DAYS, days )
$leapyeartda = new thyme( '1987/1/1', '1988/1/1', 0, 0, 1, 0 );
if( $leapyeartda->_apiObject( $leapyeartda->getTimeType(), $leapyeartda->getDateType() ) == 364 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['leapyeartda', 364, $leapyeartda->_apiObject( $leapyeartda->getTimeType(), $leapyeartda->getDateType() ) ] );
} 

// TZ = 25 ( Total DAYS, days )
$leapyeartdb = new thyme( '1987/1/1', '1988/1/1', -12, 13, 1, 0 ); 
if( $leapyeartdb->_apiObject( $leapyeartdb->getTimeType(), $leapyeartdb->getDateType() ) == 365 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['leapyeartdb', 365, $leapyeartdb->_apiObject( $leapyeartdb->getTimeType(), $leapyeartdb->getDateType() ) ] );
} 

// ( Total DAYS, years )
$leapyeartdf = new thyme( '1988/1/1', '1989/1/1', 0, 0, 1, 4 ); 
if( $leapyeartdf->_apiObject( $leapyeartdf->getTimeType(), $leapyeartdf->getDateType() ) == 0 )
{
    $pass++;
} else {
    $fail++;
    array_push( $errors, ['leapyeartdf', 1, $leapyeartdf->_apiObject( $leapyeartdf->getTimeType(), $leapyeartdf->getDateType() ) ] );
} 

############################################
##              RESULTS SCREEN            ##
############################################ 
?>
<table>
<tr>
    <td>Total tests</td>
    <td><?php echo $pass + $fail; ?></td>
</tr><tr>
    <td>Success rate</td>
    <td><?php echo round( ( $pass / ( $pass + $fail ) * 100 ), 2) . '% ' ?></td>
</tr>
</table>
<?php if( $fail > 0 ){?>
<table>
<tr>
    <th>Failed Test</th>
    <th>Expect</th>
    <th>Result</th>
</tr>
<?php 
foreach( $errors as $error ){
?>
<tr>
<td><?php echo $error[0]; ?></td>
<td style="text-align:center"><?php echo $error[1]; ?></td>
<td><?php echo $error[2]; ?></td>
</tr>
<?php } }?>