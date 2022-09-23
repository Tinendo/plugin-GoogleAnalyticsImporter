<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitde3b84caf81d2e0bd5586165da6a92e2
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Grpc\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Grpc\\' => 
        array (
            0 => __DIR__ . '/..' . '/grpc/grpc/src/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Grpc\\AbstractCall' => __DIR__ . '/..' . '/grpc/grpc/src/lib/AbstractCall.php',
        'Grpc\\BaseStub' => __DIR__ . '/..' . '/grpc/grpc/src/lib/BaseStub.php',
        'Grpc\\BidiStreamingCall' => __DIR__ . '/..' . '/grpc/grpc/src/lib/BidiStreamingCall.php',
        'Grpc\\CallInvoker' => __DIR__ . '/..' . '/grpc/grpc/src/lib/CallInvoker.php',
        'Grpc\\ClientStreamingCall' => __DIR__ . '/..' . '/grpc/grpc/src/lib/ClientStreamingCall.php',
        'Grpc\\DefaultCallInvoker' => __DIR__ . '/..' . '/grpc/grpc/src/lib/DefaultCallInvoker.php',
        'Grpc\\Interceptor' => __DIR__ . '/..' . '/grpc/grpc/src/lib/Interceptor.php',
        'Grpc\\Internal\\InterceptorChannel' => __DIR__ . '/..' . '/grpc/grpc/src/lib/Internal/InterceptorChannel.php',
        'Grpc\\MethodDescriptor' => __DIR__ . '/..' . '/grpc/grpc/src/lib/MethodDescriptor.php',
        'Grpc\\RpcServer' => __DIR__ . '/..' . '/grpc/grpc/src/lib/RpcServer.php',
        'Grpc\\ServerCallReader' => __DIR__ . '/..' . '/grpc/grpc/src/lib/ServerCallReader.php',
        'Grpc\\ServerCallWriter' => __DIR__ . '/..' . '/grpc/grpc/src/lib/ServerCallWriter.php',
        'Grpc\\ServerContext' => __DIR__ . '/..' . '/grpc/grpc/src/lib/ServerContext.php',
        'Grpc\\ServerStreamingCall' => __DIR__ . '/..' . '/grpc/grpc/src/lib/ServerStreamingCall.php',
        'Grpc\\Status' => __DIR__ . '/..' . '/grpc/grpc/src/lib/Status.php',
        'Grpc\\UnaryCall' => __DIR__ . '/..' . '/grpc/grpc/src/lib/UnaryCall.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitde3b84caf81d2e0bd5586165da6a92e2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitde3b84caf81d2e0bd5586165da6a92e2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitde3b84caf81d2e0bd5586165da6a92e2::$classMap;

        }, null, ClassLoader::class);
    }
}
