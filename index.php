FROM ubuntu:18.04
LABEL Author="PB"
RUN apt-get update
RUN apt-get install openjdk-8-jdk -y
ADD https://dt-pb-bucket.s3.amazonaws.com/spring-petclinic-2.1.0.BUILD-SNAPSHOT.jar /spring-petclinic-2.1.0.BUILD-SNAPSHOT.jar
EXPOSE 8080
CMD ["java", "-jar", "/spring-petclinic-2.1.0.BUILD-SNAPSHOT.jar" ]
