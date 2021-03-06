package org.develnext.jphp.ext.mongo.classes;

import com.mongodb.MongoClient;
import com.mongodb.client.MongoDatabase;
import org.develnext.jphp.ext.mongo.MongoExtension;
import php.runtime.annotation.Reflection.Name;
import php.runtime.annotation.Reflection.Namespace;
import php.runtime.annotation.Reflection.Signature;
import php.runtime.env.Environment;
import php.runtime.lang.BaseWrapper;
import php.runtime.reflection.ClassEntity;

@Name("MongoClient")
@Namespace(MongoExtension.NS)
public class WrapMongoClient extends BaseWrapper<MongoClient> {

    public WrapMongoClient(Environment env, MongoClient wrappedObject) {
        super(env, wrappedObject);
    }

    public WrapMongoClient(Environment env, ClassEntity clazz) {
        super(env, clazz);
    }

    @Signature
    public void __construct() {
        __construct("127.0.0.1");
    }

    @Signature
    public void __construct(String host) {
        __construct(host, 27017);
    }

    @Signature
    public void __construct(String host, int port) {
        __wrappedObject = new MongoClient(host, port);
    }

    @Signature
    public MongoDatabase database(String database) {
        return getWrappedObject().getDatabase(database);
    }

    @Signature
    public void close() {
        getWrappedObject().close();
    }
}
