/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */

package test.fixtures.basic_swift_bean;

import java.util.*;

public class LegacyServiceReactiveBlockingWrapper 
  implements LegacyService {
  private final LegacyService.Reactive _delegate;

  public LegacyServiceReactiveBlockingWrapper(LegacyService.Reactive _delegate) {
    
    this._delegate = _delegate;
  }

  @java.lang.Override
  public void close() {
    _delegate.close();
  }

  @java.lang.Override
  public Map<String, List<Integer>> getPoints(final Set<String> key,final long legacyStuff) throws org.apache.thrift.TException {
      return _delegate.getPoints(key, legacyStuff).block();
  }

}
