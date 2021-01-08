/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */

package test.fixtures.basicannotations;

import java.util.*;

public class MyServiceBlockingReactiveWrapper 
    implements MyService.Reactive {
    private final MyService _delegate;
    private final reactor.core.scheduler.Scheduler _scheduler;

    public MyServiceBlockingReactiveWrapper(MyService _delegate, reactor.core.scheduler.Scheduler _scheduler) {
        
        this._delegate = _delegate;
        this._scheduler = _scheduler;
    }

    @java.lang.Override
    public void close() {
        _delegate.close();
    }

    @java.lang.Override
    public reactor.core.publisher.Mono<Void> ping() {
        return reactor.core.publisher.Mono.<Void>fromRunnable(() -> {
                try {
                    _delegate.ping();
                } catch (Throwable _e) {
                    throw reactor.core.Exceptions.propagate(_e);
                }
            }).subscribeOn(_scheduler);
    }

    @java.lang.Override
    public reactor.core.publisher.Mono<String> getRandomData() {
        return reactor.core.publisher.Mono.fromSupplier(() -> {
                try {
                    return _delegate.getRandomData();
                } catch (Throwable _e) {
                    throw reactor.core.Exceptions.propagate(_e);
                }
            }).subscribeOn(_scheduler);
    }

    @java.lang.Override
    public reactor.core.publisher.Mono<Boolean> hasDataById(final long id) {
        return reactor.core.publisher.Mono.fromSupplier(() -> {
                try {
                    return _delegate.hasDataById(id);
                } catch (Throwable _e) {
                    throw reactor.core.Exceptions.propagate(_e);
                }
            }).subscribeOn(_scheduler);
    }

    @java.lang.Override
    public reactor.core.publisher.Mono<String> getDataById(final long id) {
        return reactor.core.publisher.Mono.fromSupplier(() -> {
                try {
                    return _delegate.getDataById(id);
                } catch (Throwable _e) {
                    throw reactor.core.Exceptions.propagate(_e);
                }
            }).subscribeOn(_scheduler);
    }

    @java.lang.Override
    public reactor.core.publisher.Mono<Void> putDataById(final long id, final String data) {
        return reactor.core.publisher.Mono.<Void>fromRunnable(() -> {
                try {
                    _delegate.putDataById(id, data);
                } catch (Throwable _e) {
                    throw reactor.core.Exceptions.propagate(_e);
                }
            }).subscribeOn(_scheduler);
    }

    @java.lang.Override
    public reactor.core.publisher.Mono<Void> lobDataById(final long id, final String data) {
        return reactor.core.publisher.Mono.<Void>fromRunnable(() -> {
                try {
                    _delegate.lobDataById(id, data);
                } catch (Throwable _e) {
                    throw reactor.core.Exceptions.propagate(_e);
                }
            }).subscribeOn(_scheduler);
    }

    @java.lang.Override
    public reactor.core.publisher.Mono<Void> doNothing() {
        return reactor.core.publisher.Mono.<Void>fromRunnable(() -> {
                try {
                    _delegate.doNothing();
                } catch (Throwable _e) {
                    throw reactor.core.Exceptions.propagate(_e);
                }
            }).subscribeOn(_scheduler);
    }

}
