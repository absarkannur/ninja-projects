import { View, Text, StyleSheet, TextInput, StatusBar, TouchableOpacity, Dimensions, FlatList, KeyboardAvoidingView, Platform, Image, ScrollView } from 'react-native'
import React, { useState, useRef } from 'react'
import Animated, { interpolate, useAnimatedStyle, useSharedValue, withTiming } from 'react-native-reanimated';
import AntDesign from '@expo/vector-icons/AntDesign';
import Spacer from './Spacer';


type ItemProps = { 'title': string, 'image': string };

const DATA = [
    {
      id: 'bd7acbea-c1b1-46c2-aed5-3ad53abb28ba',
      title: 'Gucci',
      image: 'https://static.cdnlogo.com/logos/g/68/gucci.png',
    },
    {
      id: '3ac68afc-c605-48d3-a4f8-fbd91aa97f63',
      title: 'ZARA',
      image: 'https://i.pinimg.com/564x/48/64/fd/4864fd205ac63a7663224b8c1f8baed2.jpg',
    },
    {
      id: '58694a0f-3da1-471f-bd96-145571e29d72',
      title: 'HERMES',
      image: 'https://brandlogos.net/wp-content/uploads/2018/10/hermes-logo.png',
    },
];

const DATA_SUGG = [
    {
      id: 'bd7acbea-c1b1-46c2-aed5-3ad53abb28ba',
      title: 'gucci belts',
      image: 'https://static.cdnlogo.com/logos/g/68/gucci.png',
    },
    {
      id: '3ac68afc-c605-48d3-a4f8-fbd91aa97f63',
      title: 'zara jackets',
      image: 'https://i.pinimg.com/564x/48/64/fd/4864fd205ac63a7663224b8c1f8baed2.jpg',
    },
    {
      id: '58694a0f-3da1-471f-bd96-145571e29d72',
      title: 'gucci hoodies',
      image: 'https://brandlogos.net/wp-content/uploads/2018/10/hermes-logo.png',
    },
    {
        id: '58694a0f-3da1-471f-bd96-145571e29d72',
        title: 'gucci hoodies',
        image: 'https://brandlogos.net/wp-content/uploads/2018/10/hermes-logo.png',
    },
    {
        id: '58694a0f-3da1-471f-bd96-145571e29d72',
        title: 'gucci hoodies',
        image: 'https://brandlogos.net/wp-content/uploads/2018/10/hermes-logo.png',
    },
    {
        id: '58694a0f-3da1-471f-bd96-145571e29d72',
        title: 'gucci hoodies',
        image: 'https://brandlogos.net/wp-content/uploads/2018/10/hermes-logo.png',
    },
    {
        id: '58694a0f-3da1-471f-bd96-145571e29d72',
        title: 'gucci hoodies',
        image: 'https://brandlogos.net/wp-content/uploads/2018/10/hermes-logo.png',
    },
    {
        id: '58694a0f-3da1-471f-bd96-145571e29d72',
        title: 'gucci hoodies',
        image: 'https://brandlogos.net/wp-content/uploads/2018/10/hermes-logo.png',
    },

];

const Item = ({ title, image }: ItemProps) => (
    <View style={{ width: '100%', height: 80, backgroundColor: '#fff', flexWrap: 'wrap', flexDirection: 'row', borderBottomWidth: 1, borderColor: '#DDD' }}>
        <View style={{ width: '20%', height: 80, alignItems: 'flex-start', justifyContent: 'center' }}>
            <Image style={{ height: 50, width: 50, borderRadius: 80, borderWidth: 1, borderColor: '#999' }} source={{ uri: image }} />
        </View>
        <View style={{ width: '80%', height: 80, paddingTop: 20 }}>
            <Text style={{ fontFamily: 'Raleway-SemiBold', fontSize: 18 }}>{title}</Text>
            <Text style={{ fontFamily: 'Raleway-Regular' }}>{'Designer'}</Text>
        </View>
    </View>
);

const SuggestionItem = ({ title, image }: ItemProps) => (
    <View style={{ width: '100%', backgroundColor: '#fff', flexWrap: 'wrap', flexDirection: 'row', borderBottomWidth: 1, borderColor: '#DDD' }}>
        <View style={{ width: '100%' }}>
            <Text style={{ fontFamily: 'Raleway-SemiBold', fontSize: 16, marginBottom: 20, marginTop: 20 }}>{title}</Text>
            {/* <Text style={{ fontFamily: 'Raleway-Regular' }}>{'Designer'}</Text> */}
        </View>
    </View>
);

const { width, height } = Dimensions.get('window');

export default function SearchBar() {
    const statusBarHeight = StatusBar.currentHeight;

    const [ inputActive, setInputActive ] = useState<boolean>(false);
    const [ inputValue, setInputValue ] = useState<string>('');

    const searchWidth = useSharedValue(100);
    const searchRef = useRef<TextInput>(null);

    const animatedStyle = useAnimatedStyle(() => {
        let val = interpolate(searchWidth.value, [80, 100], [80, 100])
        return {
            width: `${val}%`,
        };
    },[searchWidth]);

    const handleOnFocus = () => {

        if( inputActive === true ){
            searchRef.current?.blur();
            searchWidth.value = withTiming( 100 );
            setInputValue('');
        } else {
            searchWidth.value = withTiming( 80 );
        }

        setInputActive(!inputActive);

    }

    return (
        <View style={[ Styles.searchBox ]}>
            <Animated.View style={[ Styles.searchInputBox, animatedStyle ]}>
                <TextInput 
                    value={ inputValue }
                    onChangeText={ setInputValue }
                    ref={ searchRef }
                    onFocus={ handleOnFocus }
                    placeholder='Search (e.g `Low Profile Sneakers`)'
                    placeholderTextColor={ '#999' }

                    returnKeyType="search"
                    

                    style={Styles.searchInput} /> 
                                    
                <AntDesign style={ Styles.searchInputIcon } name="search1" size={20} color="#777777" />
            </Animated.View>
            <View style={[ Styles.searchInputCancel, { opacity: ( inputActive ) ? 1 : 0 } ]}>
                <TouchableOpacity onPress={ handleOnFocus }>
                    <Text style={{ fontSize: 17 }}>Cancel</Text>
                </TouchableOpacity>
            </View>
            <View style={[ Styles.searchModal, { opacity: ( inputActive ) ? 1 : 0 } ]}>
                <View style={{ height: '100%', backgroundColor: '#fff', width: '100%' }}>
                        <View style={{ height: '100%' }}>
                    
                            <KeyboardAvoidingView 
                                style={{flex: 1}}
                                behavior={Platform.OS === 'ios' ? 'padding' : 'height'}>
                                
                                <ScrollView style={{ flex: 1}}>
                                    <View style={ Styles.topResult }>
                                        <Text style={{ fontFamily: 'Raleway-Bold', fontSize: 18, height: 30, lineHeight: 30, marginBottom: 20 }}>Top Result</Text>
                                        {
                                            DATA.map( (item, key) => <Item key={key} title={item.title} image={ item.image } /> )
                                        }
                                    </View>
                                    <Spacer gap={ 20 } />
                                    <View style={ Styles.OtherResult }>
                                        <Text style={{ fontFamily: 'Raleway-Bold', fontSize: 18, height: 30, lineHeight: 30, marginBottom: 20 }}>Other Suggestions</Text>
                                        {
                                            DATA_SUGG.map( (item, key) => <SuggestionItem key={key} title={item.title} image={ item.image } /> )
                                        }
                                    </View>
                                </ScrollView>

                            </KeyboardAvoidingView>

                        </View>
                </View>
            </View>
        </View>
    )
}

const Styles = StyleSheet.create({
    searchBox: {
        flex:1,
        width: '100%',
        paddingLeft: 15,
        paddingRight: 15,
        alignItems: 'flex-start',
        justifyContent: 'flex-start',
        // backgroundColor: 'red',
    },
    searchInputBox: {
        height: 40,
        backgroundColor: 'rgb(238, 238, 238)',
        borderRadius: 10,
        overflow: 'hidden',
        position: 'relative',
    },
    searchInput: {
        flex: 1,
        padding: 10,
        paddingLeft: 40,
        fontSize: 17,
        color: '#000'
    },
    searchInputIcon: {
        position: 'absolute',
        top: 10,
        left: 10
    },
    searchInputCancel: {
        position: 'absolute',
        top: 0,
        right: 0,
        height: 40,
        width: '20%',
        // backgroundColor: 'red',
        justifyContent: 'center',
        paddingLeft: 5
    },
    searchModal: {
        flex:1,
        width: width,
        height: height-200, // 230
        position: 'absolute',
        top: 50,
        left: 0,
        padding: 15,
        zIndex: 999999,
        backgroundColor: '#fff',
    },
    topResult: {
        // backgroundColor: 'green',
        // flex:1,
    },
    OtherResult: {
        flex:1,
        // backgroundColor: 'red'
    }
});

