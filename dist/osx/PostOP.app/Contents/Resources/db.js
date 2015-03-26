/**
 * Created by admintest on 3/23/15.
 */
//Open the database first
//var db = Ti.Database.openFile(Ti.App.appURLToPath("app://PostOpDB.db"));

function saveUserInfo(firstname, lastname, username, password){
    var db = Ti.Database.openFile(Ti.Filesystem.getFile(
        Ti.Filesystem.getApplicationDataDirectory(), 'customdatabase.db'));
    var queryString = "INSERT INTO Users(first_name, last_name, user_name, password) VALUES('"+firstname+"', '"+lastname+"', '"+username+"', '"+password+"')";
    var exe = db.execute(queryString);
    exe.close();
    db.close();
}

function saveFbUserInformation(user_id, user_token){
    //alert(" in saveFBUSERDINFO  user_id = "+user_id+" usertoken = "+user_token);
    var db = Ti.Database.openFile(Ti.Filesystem.getFile(
        Ti.Filesystem.getApplicationDataDirectory(), 'customdatabase.db'));
    var queryString = "INSERT INTO FB(user_id, user_token) VALUES('"+user_id+"', '"+user_token+"')";
    var exe = db.execute(queryString);
    exe.close();
    db.close();
}

function createDatabase(){
    var db = Ti.Database.openFile(Ti.Filesystem.getFile(
        Ti.Filesystem.getApplicationDataDirectory(), 'customdatabase.db'));
    var usr = db.execute("CREATE TABLE IF NOT EXISTS Users(id INTEGER PRIMARY KEY AUTOINCREMENT, first_name TEXT, last_name TEXT, user_name TEXT, password TEXT)");
    var fb = db.execute("CREATE TABLE IF NOT EXISTS FB(id INTEGER PRIMARY KEY AUTOINCREMENT, user_id TEXT, user_token TEXT)");

    usr.close();
    fb.close();
    db.close();
}

