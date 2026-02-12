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
     * @param GetCrmNotesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return array<Note>
     */
    public function getAllNotes(GetCrmNotesRequest $request = new GetCrmNotesRequest(), ?array $options = null): array;

    /**
     * @param NoteData $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return PostCrmNotesResponse
     */
    public function createANote(NoteData $request, ?array $options = null): PostCrmNotesResponse;

    /**
     * @param string $id Note ID to get
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return Note
     */
    public function getANote(string $id, ?array $options = null): Note;

    /**
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
