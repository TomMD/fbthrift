#
# Autogenerated by Thrift
#
# DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
#  @generated
#

from cpython.ref cimport PyObject
from libcpp.memory cimport shared_ptr
from thrift.py3.server cimport cAsyncProcessorFactory
from folly cimport cFollyExecutor


cdef extern from "src/gen-py3/module/services_wrapper.h" namespace "::some::valid::ns":
    shared_ptr[cAsyncProcessorFactory] cEmptyServiceInterface "::some::valid::ns::EmptyServiceInterface"(PyObject *if_object, cFollyExecutor* Q)
    shared_ptr[cAsyncProcessorFactory] cReturnServiceInterface "::some::valid::ns::ReturnServiceInterface"(PyObject *if_object, cFollyExecutor* Q)
    shared_ptr[cAsyncProcessorFactory] cParamServiceInterface "::some::valid::ns::ParamServiceInterface"(PyObject *if_object, cFollyExecutor* Q)
