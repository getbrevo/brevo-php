<?php

namespace Brevo\Tests\Contacts;

use PHPUnit\Framework\TestCase;
use Brevo\Contacts\ContactsClient;
use Brevo\Core\Client\RawClient;
use Brevo\Contacts\Requests\CreateContactRequest;
use Brevo\Contacts\Types\CreateContactResponse;
use Brevo\Exceptions\BrevoException;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

class ContactsClientTest extends TestCase
{
    private $rawClientMock;
    private $contactsClient;

    protected function setUp(): void
    {
        $this->rawClientMock = $this->createMock(RawClient::class);
        $this->contactsClient = new ContactsClient($this->rawClientMock);
    }

    public function testCreateContactWithEmptyResponseSucceeds(): void
    {
        $responseMock = $this->createMock(ResponseInterface::class);
        $streamMock = $this->createMock(StreamInterface::class);

        $responseMock->method('getStatusCode')->willReturn(201);
        $responseMock->method('getBody')->willReturn($streamMock);
        $streamMock->method('getContents')->willReturn('');

        $this->rawClientMock->method('sendRequest')->willReturn($responseMock);

        $response = $this->contactsClient->createContact(new CreateContactRequest());

        $this->assertInstanceOf(CreateContactResponse::class, $response);
        $this->assertNull($response->id);
    }

    public function testCreateContactWithValidJsonResponse(): void
    {
        $responseMock = $this->createMock(ResponseInterface::class);
        $streamMock = $this->createMock(StreamInterface::class);

        $responseMock->method('getStatusCode')->willReturn(201);
        $responseMock->method('getBody')->willReturn($streamMock);
        $streamMock->method('getContents')->willReturn('{"id": 123}');

        $this->rawClientMock->method('sendRequest')->willReturn($responseMock);

        $response = $this->contactsClient->createContact(new CreateContactRequest());

        $this->assertInstanceOf(CreateContactResponse::class, $response);
        $this->assertEquals(123, $response->id);
    }
}
