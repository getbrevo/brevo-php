<?php

namespace Brevo\Tests;

use Brevo\Tests\Wire\WireMockTestCase;
use Brevo\Brevo;
use Brevo\Notes\Requests\GetCrmNotesRequest;
use Brevo\Types\NoteData;
use Brevo\Notes\Requests\PatchCrmNotesIdRequest;

class NotesWireTest extends WireMockTestCase
{
    /**
     * @var Brevo $client
     */
    private Brevo $client;

    /**
     */
    public function testGetAllNotes(): void {
        $testId = 'notes.get_all_notes.0';
        $this->client->notes->getAllNotes(
            new GetCrmNotesRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'notes.get_all_notes.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/crm/notes",
            null,
            1
        );
    }

    /**
     */
    public function testCreateANote(): void {
        $testId = 'notes.create_a_note.0';
        $this->client->notes->createANote(
            new NoteData([
                'text' => 'In communication with client_dev for resolution of queries.',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'notes.create_a_note.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/crm/notes",
            null,
            1
        );
    }

    /**
     */
    public function testGetANote(): void {
        $testId = 'notes.get_a_note.0';
        $this->client->notes->getANote(
            'id',
            [
                'headers' => [
                    'X-Test-Id' => 'notes.get_a_note.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/crm/notes/id",
            null,
            1
        );
    }

    /**
     */
    public function testDeleteANote(): void {
        $testId = 'notes.delete_a_note.0';
        $this->client->notes->deleteANote(
            'id',
            [
                'headers' => [
                    'X-Test-Id' => 'notes.delete_a_note.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "DELETE",
            "/crm/notes/id",
            null,
            1
        );
    }

    /**
     */
    public function testUpdateANote(): void {
        $testId = 'notes.update_a_note.0';
        $this->client->notes->updateANote(
            'id',
            new PatchCrmNotesIdRequest([
                'body' => new NoteData([
                    'text' => 'In communication with client_dev for resolution of queries.',
                ]),
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'notes.update_a_note.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "PATCH",
            "/crm/notes/id",
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
