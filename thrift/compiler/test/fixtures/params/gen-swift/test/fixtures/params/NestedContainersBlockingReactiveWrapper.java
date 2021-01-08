/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */

package test.fixtures.params;

import java.util.*;

public class NestedContainersBlockingReactiveWrapper 
    implements NestedContainers.Reactive {
    private final NestedContainers _delegate;
    private final reactor.core.scheduler.Scheduler _scheduler;

    public NestedContainersBlockingReactiveWrapper(NestedContainers _delegate, reactor.core.scheduler.Scheduler _scheduler) {
        
        this._delegate = _delegate;
        this._scheduler = _scheduler;
    }

    @java.lang.Override
    public void close() {
        _delegate.close();
    }

    @java.lang.Override
    public reactor.core.publisher.Mono<Void> mapList(final Map<Integer, List<Integer>> foo) {
        return reactor.core.publisher.Mono.<Void>fromRunnable(() -> {
                try {
                    _delegate.mapList(foo);
                } catch (Throwable _e) {
                    throw reactor.core.Exceptions.propagate(_e);
                }
            }).subscribeOn(_scheduler);
    }

    @java.lang.Override
    public reactor.core.publisher.Mono<Void> mapSet(final Map<Integer, Set<Integer>> foo) {
        return reactor.core.publisher.Mono.<Void>fromRunnable(() -> {
                try {
                    _delegate.mapSet(foo);
                } catch (Throwable _e) {
                    throw reactor.core.Exceptions.propagate(_e);
                }
            }).subscribeOn(_scheduler);
    }

    @java.lang.Override
    public reactor.core.publisher.Mono<Void> listMap(final List<Map<Integer, Integer>> foo) {
        return reactor.core.publisher.Mono.<Void>fromRunnable(() -> {
                try {
                    _delegate.listMap(foo);
                } catch (Throwable _e) {
                    throw reactor.core.Exceptions.propagate(_e);
                }
            }).subscribeOn(_scheduler);
    }

    @java.lang.Override
    public reactor.core.publisher.Mono<Void> listSet(final List<Set<Integer>> foo) {
        return reactor.core.publisher.Mono.<Void>fromRunnable(() -> {
                try {
                    _delegate.listSet(foo);
                } catch (Throwable _e) {
                    throw reactor.core.Exceptions.propagate(_e);
                }
            }).subscribeOn(_scheduler);
    }

    @java.lang.Override
    public reactor.core.publisher.Mono<Void> turtles(final List<List<Map<Integer, Map<Integer, Set<Integer>>>>> foo) {
        return reactor.core.publisher.Mono.<Void>fromRunnable(() -> {
                try {
                    _delegate.turtles(foo);
                } catch (Throwable _e) {
                    throw reactor.core.Exceptions.propagate(_e);
                }
            }).subscribeOn(_scheduler);
    }

}
