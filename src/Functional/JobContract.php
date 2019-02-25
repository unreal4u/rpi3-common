<?php

declare(strict_types=1);

namespace unreal4u\rpiCommonLibrary;

/**
 * Interface JobContract
 * @package unreal4u\rpiCommonLibrary
 */
interface JobContract {
    /**
     * Will be executed once before running the actual job
     *
     * @return JobContract
     */
    public function setUp(): self;

    /**
     * Runs the actual job that needs to be executed
     *
     * @return bool Returns true if job was successful, false otherwise
     */
    public function runJob(): bool;

    /**
     * If method runJob returns false, this will return an array with errors that may have happened during execution
     *
     * @return array
     */
    public function retrieveErrors(): array;

    /**
     * The number of seconds after which this script should kill itself
     *
     * @return int
     */
    public function forceKillAfterSeconds(): int;

    /**
     * The loop should run after this amount of microseconds (1 second === 1000000 microseconds)
     *
     * @return int
     */
    public function executeEveryMicroseconds(): int;
}
