function sendReminder (five, context, result) {
	const db = five.getDatabaseConnectionByID('TaskMageDB');
	if (!db.is0k()) {
		return five.createError(db, 'Connect to database failed');
	}

	const tx = five.startTransaction(db);
	if (!tx.isok()) {
		return five.createError(tx, 'Create transaction failed');
	}

	let sqlStatement = 'Select ReminderDate From Reminders';
	let queryResults = five.executeQuery(tx, sqlStatement, 0);
	if(!queryResults.isok()) {
		return five.createError(queryResults);
	}
	queryResults.values.map(item => {
		five.log("it works");
		let currentDate = Date.now();
		let reminderDate = new Date(item.ReminderDate);
		if(currentDate >= reminderDate){
			five.sendNotification("You have a task due");
		}
	})
	five.commit(tx);
	return five.success(result);
}