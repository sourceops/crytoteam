<?php
/*
 * Cryto Team is more free software. It is licensed under the WTFPL, which
 * allows you to do pretty much anything with it, without having to
 * ask permission. Commercial use is allowed, and no attribution is
 * required. We do politely request that you share your modifications
 * to benefit other developers, but you are under no enforced
 * obligation to do so :)
 * 
 * Please read the accompanying LICENSE document for the full WTFPL
 * licensing text.
 */
 
if(!isset($_APP)) { die("Unauthorized."); }

class TicketAttachment extends CPHPDatabaseRecordClass
{
	public $table_name = "ticket_attachments";
	public $fill_query = "SELECT * FROM ticket_attachments WHERE `Id` = :Id";
	public $verify_query = "SELECT * FROM ticket_attachments WHERE `Id` = :Id";
	
	public $prototype = array(
		'string' => array(
			'Reference'		=> "Reference"
		),
		'numeric' => array(
			'Type'			=> "Type",
			'TicketId'		=> "TicketId",
			'MessageId'		=> "MessageId",
			'ProjectId'		=> "ProjectId"
		),
		'ticket' => array(
			'Ticket'		=> "Ticket"
		),
		'ticketmessage' => array(
			'Message'		=> "MessageId"
		),
		'project' => array(
			'Project'		=> "ProjectId"
		)
	);
}
