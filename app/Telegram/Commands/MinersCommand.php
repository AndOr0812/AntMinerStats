<?php

namespace App\Telegram\Commands;

use Telegram;
use Telegram\Bot\Actions;
use Telegram\Bot\Commands\Command;

class MinersCommand extends Command
{
	protected $name = "miners";

	protected $description = "List of Antminers";

	public function handle($arguments)
	{
		$this->replyWithMessage(['text' => 'Hello!']);
		$this->replyWithChatAction(['action' => Actions::TYPING]);

		$keyboard = [
			['7', '8', '9'],
			['4', '5', '6'],
			['1', '2', '3'],
			['0']
		];

		$reply_markup = Telegram::replyKeyboardMarkup([
			'keyboard' => $keyboard,
			'resize_keyboard' => true,
			'one_time_keyboard' => true
		]);

		Telegram::sendMessage([
			'chat_id' => 'CHAT_ID',
			'text' => 'Hello World',
			'reply_markup' => $reply_markup
		]);

	}
}