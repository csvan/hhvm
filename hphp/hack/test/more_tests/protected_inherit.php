<?hh // strict

/**
 * Copyright (c) 2014, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * LICENSE file in the "hack" directory of this source tree. An additional grant
 * of patent rights can be found in the PATENTS file in the same directory.
 *
 */
class AAA {
  protected function foo(): string { return 'a'; }
}
class BBB extends AAA {
  protected function foo(): string { return 'b'; }
}
class CCC extends AAA {
  public function bar(): string { return (new BBB())->foo(); }
  public function baz(): string { return $this->bbb()->foo(); }
  private function bbb(): AAA { return new BBB(); }
}
