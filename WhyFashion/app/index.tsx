import { View, Text, StyleSheet, Image, Alert } from 'react-native'
import React, { useEffect, useRef } from 'react'
import { useVideoPlayer, VideoView } from 'expo-video';
import { Colors } from '@/constants/Colors'
import { router, Redirect, Link } from 'expo-router'
import { StatusBar } from 'expo-status-bar';
import Button from '@/components/Button'
import Spacer from '@/components/Spacer'

// Icons
import FontAwesome6 from '@expo/vector-icons/FontAwesome6';
import FontAwesome from '@expo/vector-icons/FontAwesome';

export default function SplashScreen() {

    const videoSource = require('@/assets/videos/video.mp4');

    const player = useVideoPlayer(videoSource, player => {
        player.muted = true;
        player.loop = true;
        player.play();
    });

    // useEffect(() => {
    //     setTimeout(function(){
    //         router.push('/(register)/register');
    //     }, 5000);
    // },[]);

    const handleRegister =() => {
        router.push('/(profile)/profile.screen');
        // router.push('/(dashboard)/dashboard');
    }

    return (
        <View style={ Styles.container }>
            <StatusBar style="light" />
            <VideoView 
                contentFit={'cover'}
                nativeControls={false}
                style={Styles.backgroundVideo} player={player} allowsFullscreen allowsPictureInPicture />
            
            <View style={ Styles.wrapper }>
                <View style={ Styles.boxTop }></View>
                <View style={ Styles.boxMiddle }>
                    <Image style={{ width: '100%', resizeMode: 'contain' }} source={require('@/assets/images/splash-logo.png')} />
                    {/* <Text style={{ fontFamily: 'Montserrat-Black', fontSize: 40, color: '#fff' }}>WhyFashion</Text> */}
                </View>
                <View style={ Styles.boxBottom }>
                    <View style={ Styles.footer}>
                        
                        <Button 
                            icon={ <FontAwesome6 name="apple" size={24} color="white" /> }
                            title="Continue with Apple" onPress={ handleRegister } />
                        
                        <Spacer gap={10} />

                        <Button 
                            icon={ <FontAwesome name="google" size={24} color="white" /> }
                            title="Continue with Google" onPress={ handleRegister } />
                        
                        <Spacer gap={20}/>
                        
                        <Link style={{ textDecorationLine: 'underline' }} href="/(register)/register">
                            <Text style={ Styles.signinText }>More sign up options</Text>
                        </Link>

                    </View>
                </View>
            </View>

        </View>
    )
}

const Styles = StyleSheet.create({
    container: {
        flex: 1,
    },
    backgroundVideo: {
        position: 'absolute',
        top: 0,
        left: 0,
        width: '100%',
        height: '100%',
        backgroundColor: 'green'
    },
    wrapper: {
        flex: 1
    },
    boxTop:{
        flex:1,
    },
    boxMiddle:{
        flex:1,
        alignItems: 'center',
        justifyContent: 'center'
    },
    boxBottom: {
        flex: 1,
        alignItems: 'center',
        justifyContent: 'center'
    },
    footer: {
        height: 200,
        width: '100%',
        padding: 30
    },
    signinText: {
        color: Colors.light.textColorWhite,
        textAlign: 'center',
        fontFamily: 'Montserrat-SemiBold',
        fontSize: 16
    }
});