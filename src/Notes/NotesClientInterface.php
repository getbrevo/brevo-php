<?php

namespace Brevo\Notes;

use Brevo\Notes\Requests\GetCrmNotesRequest;
use Brevo\Types\Note;
use Brevo\Types\NoteData;
use Brevo\Notes\Types\PostCrmNotesResponse;
use Brevo\Notes\Requests\PatchCrmNotesIdRequest;

interface NotesClientInterface
{
    /**
     * Retrieve a paginated list of CRM notes with optional filtering by entity type, entity IDs, and date range. Results are sorted by creation date in descending order by default, with a default limit of 50 notes per page.
     *
     * @param GetCrmNotesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?array<Note>
     */
    public function getAllNotes(GetCrmNotesRequest $request = new GetCrmNotesRequest(), ?array $options = null): ?array;

    /**
     * Create a new CRM note and optionally associate it with contacts, companies, or deals. The note text content is required, and you can link the note to multiple entities simultaneously during creation.
     *
     * @param NoteData $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PostCrmNotesResponse
     */
    public function createANote(NoteData $request, ?array $options = null): ?PostCrmNotesResponse;

    /**
     * Retrieve the full details of a single CRM note by its identifier. The response includes the note''s text content, creation date, author, and any associated contacts, companies, or deals.
     *
     * @param string $id Note ID to get
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?Note
     */
    public function getANote(string $id, ?array $options = null): ?Note;

    /**
     * Permanently delete a CRM note by its identifier. This removes the note and unlinks it from any associated contacts, companies, or deals.
     *
     * @param string $id Note ID to delete
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function deleteANote(string $id, ?array $options = null): void;

    /**
     * Update an existing CRM note''s text content and its associations with contacts, companies, or deals. You can modify the note text, change the pinned status, or update the linked entities.
     *
     * @param string $id Note ID to update
     * @param PatchCrmNotesIdRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function updateANote(string $id, PatchCrmNotesIdRequest $request, ?array $options = null): void;
}
