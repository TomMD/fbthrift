<?hh // strict
/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */

/**
 * Original thrift service:-
 * Bar
 */
interface BarAsyncIf extends \IThriftAsyncIf {
  /**
   * Original thrift definition:-
   * string
   *   baz(1: set<i32> a,
   *       2: list<map<i32, set<string>>> b);
   */
  public function baz(darray<int, bool> $a, \Indexish<int, \Indexish<int, darray<string, bool>>> $b): Awaitable<string>;
}

/**
 * Original thrift service:-
 * Bar
 */
interface BarIf extends \IThriftSyncIf {
  /**
   * Original thrift definition:-
   * string
   *   baz(1: set<i32> a,
   *       2: list<map<i32, set<string>>> b);
   */
  public function baz(darray<int, bool> $a, \Indexish<int, \Indexish<int, darray<string, bool>>> $b): string;
}

/**
 * Original thrift service:-
 * Bar
 */
trait BarClientBase {
  require extends ThriftClientBase;

  protected function sendImpl_baz(darray<int, bool> $a, \Indexish<int, \Indexish<int, darray<string, bool>>> $b): int {
    $currentseqid = $this->getNextSequenceID();
    $args = new Bar_baz_args();
    $args->a = $a;
    $args->b = (new Vector($b))->map(
      $_val0 ==> (new Map($_val0))
    );
    try {
      $this->eventHandler_->preSend('baz', $args, $currentseqid);
      if ($this->output_ instanceof \TBinaryProtocolAccelerated)
      {
        thrift_protocol_write_binary($this->output_, 'baz', \TMessageType::CALL, $args, $currentseqid, $this->output_->isStrictWrite(), false);
      }
      else if ($this->output_ instanceof \TCompactProtocolAccelerated)
      {
        thrift_protocol_write_compact($this->output_, 'baz', \TMessageType::CALL, $args, $currentseqid, false);
      }
      else
      {
        $this->output_->writeMessageBegin('baz', \TMessageType::CALL, $currentseqid);
        $args->write($this->output_);
        $this->output_->writeMessageEnd();
        $this->output_->getTransport()->flush();
      }
    } catch (\THandlerShortCircuitException $ex) {
      switch ($ex->resultType) {
        case \THandlerShortCircuitException::R_EXPECTED_EX:
        case \THandlerShortCircuitException::R_UNEXPECTED_EX:
          $this->eventHandler_->sendError('baz', $args, $currentseqid, $ex->result);
          throw $ex->result;
        case \THandlerShortCircuitException::R_SUCCESS:
        default:
          $this->eventHandler_->postSend('baz', $args, $currentseqid);
          return $currentseqid;
      }
    } catch (Exception $ex) {
      $this->eventHandler_->sendError('baz', $args, $currentseqid, $ex);
      throw $ex;
    }
    $this->eventHandler_->postSend('baz', $args, $currentseqid);
    return $currentseqid;
  }

  protected function recvImpl_baz(?int $expectedsequenceid = null): string {
    try {
      $this->eventHandler_->preRecv('baz', $expectedsequenceid);
      if ($this->input_ instanceof \TBinaryProtocolAccelerated) {
        $result = thrift_protocol_read_binary($this->input_, 'Bar_baz_result', $this->input_->isStrictRead());
      } else if ($this->input_ instanceof \TCompactProtocolAccelerated)
      {
        $result = thrift_protocol_read_compact($this->input_, 'Bar_baz_result');
      }
      else
      {
        $rseqid = 0;
        $fname = '';
        $mtype = 0;

        $this->input_->readMessageBegin(&$fname, &$mtype, &$rseqid);
        if ($mtype == \TMessageType::EXCEPTION) {
          $x = new \TApplicationException();
          $x->read($this->input_);
          $this->input_->readMessageEnd();
          throw $x;
        }
        $result = new Bar_baz_result();
        $result->read($this->input_);
        $this->input_->readMessageEnd();
        if ($expectedsequenceid !== null && ($rseqid != $expectedsequenceid)) {
          throw new \TProtocolException("baz failed: sequence id is out of order");
        }
      }
    } catch (\THandlerShortCircuitException $ex) {
      switch ($ex->resultType) {
        case \THandlerShortCircuitException::R_EXPECTED_EX:
          $this->eventHandler_->recvException('baz', $expectedsequenceid, $ex->result);
          throw $ex->result;
        case \THandlerShortCircuitException::R_UNEXPECTED_EX:
          $this->eventHandler_->recvError('baz', $expectedsequenceid, $ex->result);
          throw $ex->result;
        case \THandlerShortCircuitException::R_SUCCESS:
        default:
          $this->eventHandler_->postRecv('baz', $expectedsequenceid, $ex->result);
          return $ex->result;
      }
    } catch (Exception $ex) {
      $this->eventHandler_->recvError('baz', $expectedsequenceid, $ex);
      throw $ex;
    }
    if ($result->success !== null) {
      $success = $result->success;
      $this->eventHandler_->postRecv('baz', $expectedsequenceid, $success);
      return $success;
    }
    $x = new \TApplicationException("baz failed: unknown result", \TApplicationException::MISSING_RESULT);
    $this->eventHandler_->recvError('baz', $expectedsequenceid, $x);
    throw $x;
  }

}

class BarAsyncClient extends ThriftClientBase implements BarAsyncIf {
  use BarClientBase;

  /**
   * Original thrift definition:-
   * string
   *   baz(1: set<i32> a,
   *       2: list<map<i32, set<string>>> b);
   */
  public async function baz(darray<int, bool> $a, \Indexish<int, \Indexish<int, darray<string, bool>>> $b): Awaitable<string> {
    $currentseqid = $this->sendImpl_baz($a, $b);
    await $this->asyncHandler_->genWait($currentseqid);
    return $this->recvImpl_baz($currentseqid);
  }

}

class BarClient extends ThriftClientBase implements BarIf {
  use BarClientBase;

  <<__Deprecated('use gen_baz()')>>
  public function baz(darray<int, bool> $a, \Indexish<int, \Indexish<int, darray<string, bool>>> $b): string {
    $currentseqid = $this->sendImpl_baz($a, $b);
    return $this->recvImpl_baz($currentseqid);
  }

  /**
   * Original thrift definition:-
   * string
   *   baz(1: set<i32> a,
   *       2: list<map<i32, set<string>>> b);
   */
  public async function gen_baz(darray<int, bool> $a, \Indexish<int, \Indexish<int, darray<string, bool>>> $b): Awaitable<string> {
    $currentseqid = $this->sendImpl_baz($a, $b);
    await $this->asyncHandler_->genWait($currentseqid);
    return $this->recvImpl_baz($currentseqid);
  }

  /* send and recv functions */
  public function send_baz(darray<int, bool> $a, \Indexish<int, \Indexish<int, darray<string, bool>>> $b): int {
    return $this->sendImpl_baz($a, $b);
  }
  public function recv_baz(?int $expectedsequenceid = null): string {
    return $this->recvImpl_baz($expectedsequenceid);
  }
}

// HELPER FUNCTIONS AND STRUCTURES

class Bar_baz_args implements \IThriftStruct {
  use \ThriftSerializationTrait;

  public static darray<int, darray<string, mixed>> $_TSPEC = darray[
    1 => darray[
      'var' => 'a',
      'type' => \TType::SET,
      'etype' => \TType::I32,
      'elem' => darray[
        'type' => \TType::I32,
        ],
        'format' => 'array',
      ],
    2 => darray[
      'var' => 'b',
      'type' => \TType::LST,
      'etype' => \TType::MAP,
      'elem' => darray[
        'type' => \TType::MAP,
        'ktype' => \TType::I32,
        'vtype' => \TType::SET,
        'key' => darray[
          'type' => \TType::I32,
        ],
        'val' => darray[
          'type' => \TType::SET,
          'etype' => \TType::STRING,
          'elem' => darray[
            'type' => \TType::STRING,
            ],
            'format' => 'array',
          ],
          'format' => 'collection',
        ],
        'format' => 'collection',
      ],
    ];
  public static Map<string, int> $_TFIELDMAP = Map {
    'a' => 1,
    'b' => 2,
  };
  const int STRUCTURAL_ID = 5283012534631553068;
  public darray<int, bool> $a;
  public Vector<Map<int, darray<string, bool>>> $b;

  public function __construct(@\Indexish<string, mixed> $vals = darray[]) {
    // UNSAFE_BLOCK $vals is not type safe :(, and we don't cast structs (yet)
    $this->a = idx($vals, 'a', darray[]);
    $this->b = idx($vals, 'b', Vector {});
  }

  public function getName(): string {
    return 'Bar_baz_args';
  }

}

class Bar_baz_result implements \IThriftStruct {
  use \ThriftSerializationTrait;

  public static darray<int, darray<string, mixed>> $_TSPEC = darray[
    0 => darray[
      'var' => 'success',
      'type' => \TType::STRING,
      ],
    ];
  public static Map<string, int> $_TFIELDMAP = Map {
    'success' => 0,
  };
  const int STRUCTURAL_ID = 1365128170602685579;
  public ?string $success;

  public function __construct(@\Indexish<string, mixed> $vals = darray[]) {
    // UNSAFE_BLOCK $vals is not type safe :(, and we don't cast structs (yet)
  }

  public function getName(): string {
    return 'Bar_baz_result';
  }

}

