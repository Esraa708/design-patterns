<?php

namespace App\Console\Commands;

use App\Domain\StructuralPatterens\Decorator\ComplexTextFilters\DangerousHTMLTagsFilter;
use App\Domain\StructuralPatterens\Decorator\ComplexTextFilters\InputFormat;
use App\Domain\StructuralPatterens\Decorator\ComplexTextFilters\MarkdownFormat;
use App\Domain\StructuralPatterens\Decorator\ComplexTextFilters\TextInput;
use Illuminate\Console\Command;

class TestTextFiltersDecorators extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:text_filter_decorators';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Testing decorator design pattern text filters example via console commands';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $dangerousForumPost = <<<HERE
# Welcome

This is my first post on this **gorgeous** forum.

<script src="http://www.iwillhackyou.com/script.js">
  performXSSAttack();
</script>
HERE;

        /**
         * Markdown formatter + filtering dangerous tags (safe, pretty).
         */
        $text = new TextInput();
        $markdown = new MarkdownFormat($text);
        $filteredInput = new DangerousHTMLTagsFilter($markdown);
        echo "Website renders a forum post after translating markdown markup" .
            " and filtering some dangerous HTML tags and attributes (safe, pretty):\n";
        $this->displayCommentAsAWebsite($filteredInput, $dangerousForumPost);
        echo "\n\n\n";

        return Command::SUCCESS;
    }

    /**
     * The client code might be a part of a real website, which renders user-
     * generated content. Since it works with formatters through the Component
     * interface, it doesn't care whether it gets a simple component object or a
     * decorated one.
     */
    private function displayCommentAsAWebsite(InputFormat $format, string $text)
    {
        // ..
        echo $format->formatText($text);
        // ..
    }
}
