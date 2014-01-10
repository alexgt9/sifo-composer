<?php
/**
 * LICENSE
 *
 * Copyright 2010 Albert Lombarte
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */

namespace Sifo;

/**
 * Redirect (Moved permanently).
 */
class Exception_301 extends SEO_Exception{}

/**
 * Found (redirection).
 */
class Exception_302 extends SEO_Exception{}

/**
 * See other.
 */
class Exception_303 extends SEO_Exception{}

/**
 * Not modified headers. TODO, implement Etag.
 */
class Exception_304 extends SEO_Exception{}

/*
 * Temporary redirect
 */
class Exception_307 extends SEO_Exception{}

/**
 * Bad request
 */
class Exception_400 extends SEO_Exception{}

/**
 * Unauthorized Exception.
 */
class Exception_401 extends SEO_Exception{}

/**
 * Forbidden.
 */
class Exception_403 extends SEO_Exception{}

/**
 * Not found.
 */
class Exception_404 extends SEO_Exception{}

/**
 * Method not allowed.
 */
class Exception_405 extends SEO_Exception{}


/**
 * Service unavailable.
 */
class Exception_503 extends SEO_Exception{}

/* Not so common status codes */
class Exception_100 extends SEO_Exception{}
class Exception_101 extends SEO_Exception{}
class Exception_201 extends SEO_Exception{}
class Exception_202 extends SEO_Exception{}
class Exception_203 extends SEO_Exception{}
class Exception_204 extends SEO_Exception{}
class Exception_205 extends SEO_Exception{}
class Exception_206 extends SEO_Exception{}
class Exception_300 extends SEO_Exception{}
class Exception_305 extends SEO_Exception{}
class Exception_402 extends SEO_Exception{}
class Exception_406 extends SEO_Exception{}
class Exception_407 extends SEO_Exception{}
class Exception_408 extends SEO_Exception{}
class Exception_409 extends SEO_Exception{}
class Exception_410 extends SEO_Exception{}
class Exception_411 extends SEO_Exception{}
class Exception_412 extends SEO_Exception{}
class Exception_413 extends SEO_Exception{}
class Exception_414 extends SEO_Exception{}
class Exception_415 extends SEO_Exception{}
class Exception_416 extends SEO_Exception{}
class Exception_417 extends SEO_Exception{}
class Exception_501 extends SEO_Exception{}
class Exception_502 extends SEO_Exception{}
class Exception_504 extends SEO_Exception{}
class Exception_505 extends SEO_Exception{}