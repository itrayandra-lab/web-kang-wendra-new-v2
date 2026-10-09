<?php

namespace Tests\Unit;

use App\Services\YouTubeChannelSyncService;
use PHPUnit\Framework\TestCase;

class YouTubeChannelSyncServiceTest extends TestCase
{
    public function test_it_parses_a_youtube_atom_feed(): void
    {
        $xml = <<<'XML'
<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns:yt="http://www.youtube.com/xml/schemas/2015" xmlns:media="http://search.yahoo.com/mrss/" xmlns="http://www.w3.org/2005/Atom">
  <entry>
    <yt:videoId>abc123</yt:videoId>
    <title>Video terbaru</title>
    <published>2026-10-08T01:00:00+00:00</published>
    <media:group>
      <media:thumbnail url="https://i.ytimg.com/vi/abc123/hqdefault.jpg" />
      <media:description>Deskripsi video</media:description>
    </media:group>
  </entry>
</feed>
XML;

        $items = (new YouTubeChannelSyncService)->parseFeed($xml);

        $this->assertCount(1, $items);
        $this->assertSame('abc123', $items[0]['youtube_id']);
        $this->assertSame('Video terbaru', $items[0]['title']);
        $this->assertSame('https://www.youtube.com/watch?v=abc123', $items[0]['url']);
    }
}
