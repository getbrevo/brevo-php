<?php

namespace Brevo\Tests;

use Brevo\Tests\Wire\WireMockTestCase;
use Brevo\Brevo;
use Brevo\Tasks\Requests\GetCrmTasksRequest;
use Brevo\Tasks\Requests\PostCrmTasksRequest;
use DateTime;
use Brevo\Tasks\Requests\PatchCrmTasksIdRequest;

class TasksWireTest extends WireMockTestCase
{
    /**
     * @var Brevo $client
     */
    private Brevo $client;

    /**
     */
    public function testGetAllTasks(): void {
        $testId = 'tasks.get_all_tasks.0';
        $this->client->tasks->getAllTasks(
            new GetCrmTasksRequest([
                'sortBy' => 'name',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'tasks.get_all_tasks.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/crm/tasks",
            ['sortBy' => 'name'],
            1
        );
    }

    /**
     */
    public function testCreateATask(): void {
        $testId = 'tasks.create_a_task.0';
        $this->client->tasks->createATask(
            new PostCrmTasksRequest([
                'date' => new DateTime('2021-11-01T17:44:54Z'),
                'name' => 'Task: Connect with client_dev',
                'taskTypeId' => '61a5cd07ca1347c82306ad09',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'tasks.create_a_task.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/crm/tasks",
            null,
            1
        );
    }

    /**
     */
    public function testGetATask(): void {
        $testId = 'tasks.get_a_task.0';
        $this->client->tasks->getATask(
            'id',
            [
                'headers' => [
                    'X-Test-Id' => 'tasks.get_a_task.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/crm/tasks/id",
            null,
            1
        );
    }

    /**
     */
    public function testDeleteATask(): void {
        $testId = 'tasks.delete_a_task.0';
        $this->client->tasks->deleteATask(
            'id',
            [
                'headers' => [
                    'X-Test-Id' => 'tasks.delete_a_task.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "DELETE",
            "/crm/tasks/id",
            null,
            1
        );
    }

    /**
     */
    public function testUpdateATask(): void {
        $testId = 'tasks.update_a_task.0';
        $this->client->tasks->updateATask(
            'id',
            new PatchCrmTasksIdRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'tasks.update_a_task.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "PATCH",
            "/crm/tasks/id",
            null,
            1
        );
    }

    /**
     */
    public function testGetAllTaskTypes(): void {
        $testId = 'tasks.get_all_task_types.0';
        $this->client->tasks->getAllTaskTypes(
            [
                'headers' => [
                    'X-Test-Id' => 'tasks.get_all_task_types.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/crm/tasktypes",
            null,
            1
        );
    }

    /**
     */
    protected function setUp(): void {
        parent::setUp();
        $this->client = new Brevo(
            apiKey: 'test-apiKey',
        options: [
            'baseUrl' => 'http://localhost:8080',
        ],
        );
    }
}
